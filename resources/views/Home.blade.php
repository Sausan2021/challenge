@extends('layouts.app')

@section('content')
<div class="center m-3">
<div class="container">
    <div class="row">
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-header">
              <h2 class="card-title">Display Statistics</h2>
              <br>
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
              @foreach ($statistics as $row)
                      <tr>
                        <td><input name="id" value="{{$row->student_id}}"></td>
                        <td><input name="id" value="{{$row->class_id}}"></td>
                        <td><input name="id" value="{{$row->country_id}}"></td>
                        <td>{{ $row->count_per_country}}</td>
                        <td>{{ $row->count_per_class }}</td> 
                        <td>{{ $row->average }}</td>
             

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