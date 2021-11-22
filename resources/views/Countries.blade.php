@extends('layouts.app')

@section('content')
<div class="center">
<div class="container">
    <h2>Country Data</h2>
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
        <form action="/?page_id=143#wpcf7-f156-p143-o1" method="post" class="wpcf7-form" novalidate="novalidate">
            @csrf
            @include('flash-message')  
            <p>
               <span class="wpcf7-form-control-wrap Name">
                 <input type="text" name="name" value="" size="40" class="nameinput wpcf7-form-control wpcf7-text wpcf7-validates-as-required @error('name') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Country Name">
                 @error('name')
                 <div style="color: red">{{ $message }}</div>
                  @enderror
                </span>
             

              <input type="submit" value="Add" class="wpcf7-form-control wpcf7-submit btn">
              <img class="ajax-loader" src="http://www.jordancundiff.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Saving ..." style="visibility: hidden;">
          </p>
          <div class="wpcf7-response-output wpcf7-display-none">
          </div>
      </form>
    </div>
</div>
</div>

@endsection