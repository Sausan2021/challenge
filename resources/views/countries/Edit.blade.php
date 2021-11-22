@extends('layouts.app')

@section('content')
 
<div class="center">
<div class="container">
    <h2>Class Data</h2>
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
        <form action="/countryUpdate/{{$countries->id}}" method="POST">
            @csrf
            @include('flash-message')
           
            <section>
                <div class="inner">
                   
                    <div class="form-content" >
                        <p>You Can Edit Countries Here</p>
                        <div class="form-row">
                            <div class="form-holder">
                              <b>Country Name:</b>  <input type="text" placeholder="Country Name" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{$countries->name}}">
                            </div>
                        </div>
                        @error('name')
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