<!DOCTYPE html>
<html lang="en">
{{-- Include Head & CSS File --}}
@include('css')
{{-- End Head & CSS File --}}

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

      <!-- slider -->
      @include('slider')
      <!-- end slider -->

      <!-- about -->
      @include('about')
      <!-- end about -->

      <!-- our_room -->
      @include('rooms')
      <!-- end our_room -->

      <!-- gallery -->
      @include('gallery')
      <!-- end gallery -->

      <!--  contact -->
      @include('contact')
      <!-- end contact -->

      <!--  footer -->
      @include('footer')
      <!-- end footer -->

      <!-- Javascript files-->
      @include('js')
      <!-- End Javascript files-->

   </body>
</html>