@extends('layouts.app')

@section('content')
<div class="center m-3">
<div class="container">
    <h2>Student Data</h2>
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
        <form action="/Students/store" method="POST" class="wpcf7-form" novalidate="novalidate">
            @csrf
            @include('flash-message')
            <div class="col-md-3 px-1">
              <div class="form-group">
               <span class="wpcf7-form-control-wrap Name">
                 <input type="text" name="name" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required @error('name') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Student Name">
               </span>
              </div> 
                 @error('name')
                 <div style="color: red">{{ $message }}</div>
                  @enderror
            </div>
             
            <div class="col-md-3 px-1">
              <div class="form-group">
              <span class="wpcf7-form-control-wrap Date">
                 <input type="date" name="date_of_birth" id="birthday" size="40" class="dateinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required  @error('date_of_birth') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Birth Date">
                </span>
              </div>
              @error('date_of_birth')
                <div style="color: red">{{ $message }}</div>
                 @enderror
            </div>
           
              <input type="submit" value="Add" class="wpcf7-form-control wpcf7-submit btn">
              <img class="ajax-loader" src="http://www.jordancundiff.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Saving ..." style="visibility: hidden;">
         
          <div class="wpcf7-response-output wpcf7-display-none">
          </div>
      </form>
      <div id="link">
        <div style="width: 100%; height: 100%">
            <table>
                <tr class="accept link_2">
                <td><a href="/Students/ViewData" value="link_2">Make Updation</a></td>
                    
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
