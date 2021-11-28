<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
        
    
    <!-- Scripts -->
    <script src="/public/js/app.js" defer></script>
    <script src="/public/js/bootstrap.js" defer></script>
     <!-- Fonts -->
     <script><src="{{ asset('global/bundles/flotscripts.bundle.js') }}"></script>
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
      <link rel="stylesheet" type="text/css" href="style.css">
        <title>Rihal- Full Stack</title>
    </head>
    <body>
      <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <!--profile image & text-->
           <div class="profile">
            <img src="https://png2.cleanpng.com/sh/06210107a0c11215ec22bf3c6db347ea/L0KzQYm3VMIzN6N7fZH0aYP2gLBuTgdmal5pfehubHBzfbb1lL1kd551jeZucj3sc7F1k71kd551jeZucj3zgrFukvFudZpzRdhycn2wRbLrg8Nma5I3S6s5ZkGxQIi6WMU1OGU2TaQ9M0i2RIS7UcQ2P191htk=/kisspng-web-development-computer-icons-computer-programmin-firm-5adc3eca2390f1.0738540415243834341457.png">
            <h3>Sausan Alsuti</h3>
            <p>Full-Stack Web Developer</p>
        </div>
            <!--menu item-->
            <ul>
              <li>
                  <a href="#" class="active">
                      <span class="icon"><i class="fas fa-home"></i></span>
                      <span class="item">My Dashboard</span>
                  </a>
              </li>
              <li>
                  <a href="/Home">
                      <span class="icon"><i class="fas fa-desktop"></i></span>
                      <span class="item">Statistics</span>
                  </a>
              </li>
              <li>
                  <a href="/Students">
                      <span class="icon"><i class="fas fa-user-friends"></i></span>
                      <span class="item">Students</span>
                  </a>
              </li>
              <li>
                  <a href="/Countries">
                      <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                      <span class="item">Countries</span>
                  </a>
              </li>
              <li>
                  <a href="/Classes">
                      <span class="icon"><i class="fas fa-database"></i></span>
                      <span class="item">Classes</span>
                  </a>
              </li>
              
          </ul>
      </div>
        </div>
<div class="center m-3">
<div class="container">
    <h2>Show Countries Details</h2>
    @include('flash-message')
    <div class="wpcf7" id="wpcf7-f156-p143-o1 formwrap">
        <table class="table" border="1">
            <thead class=" text-primary">
              <th>
                  Country Name
              </th>
              <th>
                  Edit
              </th>
              <th>
                  Delete
              </th>
            </thead>
              <tbody>@if ($countries)
        @foreach ($countries as $country)
                <tr>
                  
          <td> <h6>{{$country->name}}</h6></td> 
           <td><a href="{{ url('countryEdit/'.$country->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Edit</a></td>
           <td><a href="{{ url('countryDelete/'.$country->id) }}" class="btn btn-primary btn-round update ml-auto mr-auto" >Delete</a></td>

                 </tr> @endforeach
        @else
        There is No Countries Data to show..
        @endif 
              </tbody>
            </table>

        <div id="link">
            <div style="width: 100%; height: 100%">
            <table>
                <tr class="accept link_1">
                <td><a href="/Countries" value="link_1">Countries Details</a></td>
                   
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
   

 </script>
</div>
</div>
<div>
    <main class="py-4">
        @yield('content')
    </main>
</div>  
</body>
</html>
