@extends('layouts.app')

@section('content')
<div class="center m-3">
<div class="container">
    <h2>Show Students Details</h2>
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
        <table class="table" border="1">
            <thead class=" text-primary">
              <th>
                  Student Name
              </th>
              <th>
                  student Birthdate
              </th>
              <th>
                  Edit
              </th>
              <th>
                  Delete
              </th>
            </thead>
              <tbody>@if ($students)
        @foreach ($students as $student)
                <tr>
                  
          <td> <h6 class="mt-0">{{$student->name}}</h6></td> 
          <td> <h6 class="mt-0">{{$student->name}}</h6></td> 
           <td><a href="{{ url('studentEdit/'.$student->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Edit</a></td>
           <td><a href="{{ url('studentDelete/'.$section->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Delete</a></td>

                 </tr> @endforeach
        @else
        There is No Students Data to show..
        @endif 
              </tbody>
            </table>

        <div id="link">
            <div style="width: 100%; height: 100%">
            <table>
                <tr class="accept link_1">
                <td><a href="/Students" value="link_1">Students Details</a></td>
                    
                </tr>
            </table>
             </div>
        </div>
    </div>
    <script>
     $(".accept").click(function() {
            $(".hidden_div").show("slow");
            $("#link").hide("slow");
            if($(this).hasClass("link_1")){
            	$("#link_1").show("slow");
            }
            if($(this).hasClass("link_2")){
            	$("#link_2").show("slow");
            }
            
        });

            $("#close_tab_button").click(function() {
            $("#link_1").hide("slow");
            $("#link_2").hide("slow");
            $(".hidden_div").hide("slow");
            $("#link").show("slow");
            //$($this).hide("slow");

        });     

 </script>
</div>
</div>
@endsection