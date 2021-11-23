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
                    <tbody>
                      @if ($statistics)
              @foreach ($statistics as $statistic)
                      <tr>
                        <td>{{ $statistic->student_name}}</td>
                        <td>{{ $statistic->country_name }}</td>
                        <td>{{ $statistic->class_name }}</td>
                        <td>{{ $statistic->count_per_country->getcl()->COUNT() }}</td>
                        <td>{{ $statistic->count_per_class->getca()->COUNT() }}</td> 
                        <td>{{ $statistic->average->getAge()->AVG() }}</td>
             

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