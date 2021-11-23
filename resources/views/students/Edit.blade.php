@extends('layouts.app')

@section('content')
 
<div class="center">
<div class="container">
    <h2>Students Data</h2>
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
        <form action="/StudentsUpdate/{{$students->id}}" method="POST">
            @csrf
            @include('flash-message')
           
            <section>
                <div class="inner">
                   
                    <div class="form-content" >
                        <p>You Can Edit Classes Here</p>
                        <div class="form-row">
                            <div class="form-holder">
                              <b>Student Name:</b>  <input type="text" placeholder="Student Name" class="form-control @error('name') is-invalid @enderror"  name="name" value="{{$students->name}}">
                            </div>
                        </div>
                        @error('name')
                           <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="form-row">
                                <div class="form-holder">
                                  <b>Student Birthdate:</b>  <input type="text" placeholder="Birthdate" class="form-control @error('date_of_birth') is-invalid @enderror"  name="date_of_birth" value="{{$students->date_of_birth}}">
                                </div>
                            </div>
                            @error('date_of_birth')
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