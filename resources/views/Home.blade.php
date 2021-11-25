@extends('layouts.app')

@section('content')
<div class="center m-3">
<div class="container">
    <div class="row">
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-header">
              <h2 class="card-title">Display Statistics</h2>
            </div>
            <div class="card-body">
                <table class="table" border="1">
                  <thead class=" text-primary" width="50%">
                    <th>
                        Student ID
                    </th>
                    <th>
                        Country ID
                    </th>
                    <th>
                        Class ID
                    </th>
                    <th>
                        Count of students per class
                    </th>
                    <th>
                        Count of students per country
                    </th>
                    <th>
                        Average age of students
                    </th>
                  </thead>
                    <tbody>
                      @if ($statistics)
              @foreach ($statistics->result() as $row)
                      <tr>
                        <td>{{ Student::get($row->student_id)}}</td>
                        <td>{{ Country::get($row->country_id)}}</td>
                        <td>{{ Category::get($row->class_id)}}</td>
                        <td>{{ $row->count_per_country }}</td>
                        <td>{{ $row->count_per_class }}</td> 
                        <td>{{ $row->average->getAge() }}</td>
             

                      </tr> 
                @endforeach
              
              
                       @else
                          There is No Statistics to show..
                        @endif 
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
</div>

</div>
 @endsection