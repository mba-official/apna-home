<!DOCTYPE html>
<html lang="en">
{{-- Include Head & CSS File --}}
<base href="/public">
@include('css')
{{-- End Head & CSS File --}}
<style>
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      font-family: Arial;
    }
    
    /* The grid: Four equal columns that floats next to each other */
    .column {
      float: left;
      width: 25%;
      padding: 10px;
    }
    
    /* Style the images inside the grid */
    .column img {
      opacity: 0.8; 
      cursor: pointer; 
    }
    
    .column img:hover {
      opacity: 1;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* The expanding image container */
    .container {
        position: relative; 
    }
</style>

   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->

      <!-- header -->
      @include('header')
      <!-- end header inner -->
      <!-- end header -->

    <div class="my-4">
      <section class="vh-100">
        <h1 class="h1 text-center text-danger font-weight-bold">BOOK YOUR ROOM</h1>
        
        @if (session('login_status'))
        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="font-size: 22px">
          <strong>Sorry!</strong> {{session('login_status')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- @if ($errors->any()){
          @foreach ($errors as $error)
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> You need to login before book the room.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endforeach
        }  
        @endif --}}
        


        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="flex col-md-9 col-lg-6 col-xl-5">



              {{-- <div class="alert alert-danger">
              @if ($errors->any()){
                      @foreach ($errors->all() as $error)
                      <ul>
                          <li>{{$error}}</li>
                      </ul>       
                      @endforeach
                  }
              @endif
              </div> --}}

                <div class="container">
                    <div id="imgtext"></div>
                    <span onclick="this.parentElement.style.display='none'"></span>
                    <img id="expandedImg" style="width:100%; height: 20rem" src="/room_img/{{$rooms->room_img}}">
                  </div>
                <div class="row">
                    <div class="column">
                      <img src="/room_img/{{$rooms->room_img}}" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="images/room2.jpg" style="width:100%; height:90%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="images/room3.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="images/room4.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="images/room1.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="images/room5.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="images/room2.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                    <div class="column">
                      <img src="images/room3.jpg" style="width:100%" onclick="myFunction(this);">
                    </div>
                </div>
                    
              {{-- <img src="/room_img/{{$rooms->room_img}}" class="img-fluid" alt="Sample image"> --}}
                <h1 class="text-danger mt-4" style="font-weight: bold">{{$rooms->room_title}}</h1>
                <p>{{$rooms->room_desc}}</p>
                <h2 class="text-danger mt-2" style="font-size: 18px; font-weight:bold;"><strong>Price: </strong>Rs. {{$rooms->room_price}}</h2><hr>
                <div class="h3">
                  <h1 class="text-danger" style="font-weight:bold">Room Ratings</h1>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star text-warning"></span>
                  <span class="fa fa-star"></span>
                </div>
            </div>

            <div class="col-md-8 col-lg-6 col-xl-5 mx-2">
              <form method="POST" action="{{route('rooms', $rooms->id)}}">
                @csrf
                <div class="form-outline mb-4">
                <label class="form-label" for="room_user_name">Username</label>
                <input type="text" id="room_user_name" class="form-control form-control-lg" name="room_user_name" placeholder="Enter Username"/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="room_user_email">User Email</label>
                <input type="email" id="room_user_email" class="form-control form-control-lg" name="room_user_email" placeholder="Enter Email"/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="room_user_phone">User Phone Number</label>
                <input type="text" id="room_user_phone" class="form-control form-control-lg" name="room_user_phonenumber" placeholder="Enter Phone Number"/>
                </div>
                
                <div class="form-outline mb-4">
                <label class="form-label" for="room_type">Room Type</label>
                <input type="text" id="room_type" class="form-control form-control-lg" name="room_title" placeholder="Enter Room Type. ({{$rooms->room_title}})"/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="room_sdate">Date From</label>
                <input type="date" id="room_sdate" class="form-control form-control-lg" name="room_sdate" min="2024-01-01"/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="room_edate">Date To</label>
                <input type="date" id="room_edate" class="form-control form-control-lg" name="room_edate" min="2024-01-01"/>
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="room_type">Room Price</label>
                <input type="text" id="room_type" class="form-control form-control-lg" name="room_price" placeholder="Enter Room Price. ({{$rooms->room_price}})"/>
                <p><strong class="text-danger">Note:</strong> The Room price is for only 2 days. If you need the room for more days, after 2 days you will have to pay the next day price.</p> 
                </div>

                <div class="text-right text-lg-start mt-4">
                  <button type="submit" class="btn btn-danger btn-lg">Book Room</button>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
      

      <!--  footer -->
      @include('footer')
      <!-- end footer -->

      <!-- Javascript files-->
      @include('js')
      <!-- End Javascript files-->

    <script>
        function myFunction(imgs) {
          var expandImg = document.getElementById("expandedImg");
          var imgText = document.getElementById("imgtext");
          expandImg.src = imgs.src;
          imgText.innerHTML = imgs.alt;
          expandImg.parentElement.style.display = "block";
        }
    </script>
   </body>
</html>