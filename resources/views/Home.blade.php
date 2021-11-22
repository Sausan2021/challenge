@extends('layouts.app')

@section('content')
<div class="center m-3">
<div class="container">
    <div class="row">
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-header">
              <h1 class="card-title">Display Statistics</h1>
            </div>
            <div class="card-body">
                <table class="table" border="1">
                  <thead class=" text-primary">
                    <th>
                        Student Name
                    </th>
                    <th>
                        Country Name
                    </th>
                    <th>
                        Class Name
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
                    {{-- <tbody>@if ($sections)
              @foreach ($sections as $section) --}}
                      <tr>
                        
                {{-- <td> <h6 class="mt-0">{{$section->name}}</h6></td> --}}
                 {{-- <td><a href="{{ url('sectionEdit/'.$section->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Edit</a></td> --}}
                 {{-- <td><a href="{{ url('sectionDelete/'.$section->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Delete</a></td> --}}

             <td></td>
             <td></td>
                     <td></td> 

                      {{-- </tr> @endforeach
              @else
              There is No Statistics to show..
              @endif --}}
                    </tbody>
                  </table>
            </div>
          </div>
        </div>
      </div>
</div>

</div>
 @endsection