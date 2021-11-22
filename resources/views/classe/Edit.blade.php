@extends('layouts.app')

@section('content')
 
<div class="center">
<div class="container">
    <h2>Class Data</h2>
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
        <form action="/classUpdate/{{$categories->id}}" method="POST">
            @csrf
            @include('flash-message')
           
            <section>
                <div class="inner">
                   
                    <div class="form-content" >
                        <p>You Can Edit Classes Here</p>
                        <div class="form-row">
                            <div class="form-holder">
                              <b>Class Name:</b>  <input type="text" placeholder="Class Name" class="form-control @error('class_name') is-invalid @enderror"  name="class_name" value="{{$classes->class_name}}">
                            </div>
                        </div>
                        @error('class_name')
                           <div style="color: red">{{ $message }}</div>
                            @enderror
                      </div>
                            </div>
                        </div>
                    </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                  <button type="submit" class="btn btn-primary btn-round">Save changes</button>
                                </div>
                              </div>
                            </form>
                        </div>
                  
                    
                    
                    @endsection