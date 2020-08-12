<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

        <title>@yield('title')</title>

        <!-- Fonts -->
       <link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
       <link rel="stylesheet" href="{{ asset('frontend/css/frontend.css') }}">
       <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand">
                        <span class="navbar-text animate text-white" style="font-size:30px; font-weight:bolder;">
                            News Blog
                        </span>
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="collapse_target">                      
                        <ul class="navbar-nav ml-auto" >
                            <li class="nav-item" >
                             <a href="{{url('/')}}" class="nav-link text-white">Home</a>
                            </li>
                            <li class="nav-item" >
                                @if(Auth::check())
                                <a href="{!! url('/admin') !!}" class="nav-link text-white ">
                                    Admin Dashboard
                                </a>
                                @else
                                <a href="{{url('currency')}}" class="nav-link text-white">
                                    Currency
                                </a>
                                @endif
                            </li>
                            <li class="nav-item" >
                             <a href="{{url('about')}}" class="nav-link text-white">
                                About Us
                             </a>
                            </li>
                            <li class="nav-item" >
                                @if(Auth::check())
                                    <a  href="{{url('logout')}}" class="nav-link">Logout</a>   
                                @else 
                                    <a href="{{url('login')}}" class="nav-link">Login</a>  
                                @endif                              
                            </li>
                        </ul>
                    </div>
        </nav>

        <div class="jumbotron">
        </div>
               
        
        @yield('content')
            <!--example-->

        <div class="footer">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="#"><i class="fab fa-facebook-square" style="font-size:3rem;"></i></a>
                        <a href="#"><i class="fab fa-twitter-square " style="font-size:3rem;"></i></a>
                        <a href="#"><i class="fab fa-google-plus-square" style="font-size:3rem;"></i></a>
                        <a href="#"><i class="fab fa-instagram " style="font-size:3rem;"></i></a>
                    </div>
                    <div class="col-lg-4 text-white">
                        <address>
                            Written by <a href="mailto:webmaster@example.com">Jon Doe</a>.<br>
                            Visit us at:<br>
                            Example.com<br>
                            Box 564, Disneyland<br>
                            USA
                        </address> 
                    </div>
                    <div class="col-lg-4 text-white">
                        <ul>
                            <li>FAQ</li>
                            <li>Contact</li>
                            <li>Help</li>
                            <li>Service</li>
                        </ul>
                    </div>
                </div>
                <div class="mx-auto text-white text-center">
                         <p>Powered by <strong style="color: whitesmoke;">News Blog</strong></p> 
                </div>
        </div>
    <script src="{{ asset('frontend/bootstrap/js/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('frontend/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
