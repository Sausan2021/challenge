{{-- connections - table:

Schema::create('connections', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('host_id')->unsigned();
    $table->text('comment');
    $table->timestamps();
});

Schema::table('connections', function (Blueprint $table) {
    $table->foreign('host_id')
        ->references('id')
        ->on('hosts');
});
hosts - table:

Schema::create('hosts', function (Blueprint $table) {
    $table->increments('id');
    $table->text('name');
    $table->timestamps();
});
Connections.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connections extends Model
{
    public function hosts()
    {
      return $this->belongsTo('App\Hosts', 'host_id');
    }
}
Hosts.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosts extends Model
{
    public function connections()
    {
        return $this->hasMany('App\Connections');
    }
}
ConnectionsController.php

namespace App\Http\Controllers;

use App\Connections;
use Illuminate\Http\Request;

class ConnectionsController extends Controller
{
    public function index()
    {
        $connections = Connections::with('hosts')->get();
        return view('connections.index', compact('connections'));
    }
}
views/connections/index.blade.php

<table class="table table-hover">
    <tr>
        <th>Comment</th>
        <th>Nazwa</th>
    </tr>
    @foreach($connections as $element)
        <tr>
            <td>{{ $element->comment }}</td>
            <td>{{ $element->hosts->name }}</td>
        </tr>
    @endforeach
</table>
The view without "$element->hosts->name" returns "comment" value but when I add the second line with "$element->hosts->name" I get an error "Trying to get property of non-object (View: /Applications/XAMPP/xamppfiles/htdocs/mdbms/resources/views/connections/index.blade.php)". I wonder where there's a mistake. --}}