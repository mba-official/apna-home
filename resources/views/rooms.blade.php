<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Room</h2>
                <p>Come and enjoy our beautiful rooms. 24/7 room service available, free Wi-Fi, free food and much more at a very reasonable price.</p>
             </div>
          </div>
       </div>
         <div class="row">
         @foreach ($rooms as $room)
            <a href="{{url('rooms', $room->id)}}">      
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                     <figure><img src="/room_img/{{$room->room_img}}" style="height: 250px"/></figure>
                     </div>
                     <div class="bed_room">
                     <h3>{{$room->room_title}}</h3>
                     <p>{{Str::limit($room->room_desc, 100)}}</p>
                     <a href="{{url('rooms', $room->id)}}" class="btn btn-danger mt-4">View Details</a>
                     </div>
                  </div>
               </div>
            </a>
         @endforeach
         </div>
      </div>
   </div>
 </div>