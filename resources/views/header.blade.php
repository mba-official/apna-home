<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">
                         <a href="{{route('apna-home')}}"><img src="images/logo.png" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="{{url('rooms')}}">Our room</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                         </li>
                         @if (Route::has('login'))
                             @auth
                                 <li class="nav-item">
                                    <a class="btn btn-dark" href="{{route("dashboard")}}">My Account</a>
                                 </li>
                              @else
                                 <li class="nav-item">
                                    <a class="btn btn-dark " href="{{'login'}}">Login</a>
                                 </li>
                                 @if (Route::has('register'))
                                    <li class="nav-item">
                                       <a class="btn btn-danger mx-2" href="{{'register'}}">Register</a>
                                    </li>
                                 @endif
                             @endauth
                        @endif
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>




{{-- <a href="{{ route('dashboard') }}" class="nav-link font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">My Account</a> --}}