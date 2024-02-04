<div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Us</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-6">
             <form id="request" class="main_form" method="POST" action="{{route('complains')}}">
               @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input class="contactus" placeholder="Name" type="type" name="name"> 
                   </div>
                   <div class="col-md-12">
                      <input class="contactus" placeholder="Email" type="type" name="email"> 
                   </div>
                   <div class="col-md-12">
                      <textarea class="textarea" placeholder="Message" type="type" name="message"></textarea>
                   </div>
                   <div class="col-md-12">
                      <button class="send_btn" type="submit">Send</button>
                   </div>
                </div>
             </form>
          </div>
          <div class="col-md-6">
             <div class="map_main">
                <div class="map-responsive">
                   <img src="/images/contact.jpg" alt="contact us image">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>