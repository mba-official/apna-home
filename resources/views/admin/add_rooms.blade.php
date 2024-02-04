<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
        <div class="flex">
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="add-rooms" :active="request()->routeIs('admin-dashboard')">
                    {{ __('Add Rooms') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="{{ route('rooms-list') }}" :active="request()->routeIs('admin-dashboard')">
                    {{ __('View Rooms') }}
                </x-nav-link>
            </div>
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="{{route('complains-list') }}" :active="request()->routeIs('admin-dashboard')">
                    {{ __('Complains') }}
                </x-nav-link>
            </div>
        </div>
    </div>
    <div class="container text-white">
        {{-- - - - - - - - -If any error - - - - - - - - --}}
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
        {{-- - - - - - - - -If any error - - - - - - - - --}}
    </div>
    <div class="container" style="margin: auto; padding: 2rem">
        <div class="add_rooms ">
            <h1 class="text-white text-center mb-6" style="font-size: 40px">ADD ROOMS</h1>
            @if (session('status'))
                <div id="msg" class="text-white text-center" style="font-size: 20px; background-color: rgba(21, 126, 21, 0.853); padding: 1rem; margin-bottom: 1rem">
                    <strong>Success! </strong>{{session('status')}}
                </div>
            @endif
            <form action="{{route("add-rooms")}}" method="POST" class="form-control" enctype="multipart/form-data">
                @csrf
                <label for="room_title" class="text-white" style="font-size: 20px">Room Title</label>
                <input type="text" style="width: 100%; margin-top: 0.5rem; margin-bottom: 1.2rem" name="room_title" id="room_title" placeholder="Room Title">

                <label for="room_price" class="text-white" style="font-size: 20px">Room Price</label>
                <input type="text" style="width: 100%; margin-top: 0.5rem; margin-bottom: 1.2rem" name="room_price" id="room_price" placeholder="Room Price">

                <label for="room_desc" class="text-white" style="font-size: 20px;">Room Description</label>
                <textarea name="room_desc" id="room_desc" rows="6" style="display: block; width: 100%; margin-top: 0.5rem; margin-bottom: 1.2rem" placeholder="Room Description"></textarea>

                <label for="room_img" class="text-white" style="font-size: 20px">Room Image</label>
                <input type="file" style="width: 100%; font-size:18px; padding: 0.5rem; margin-top: 0.5rem; margin-bottom: 1.2rem" name="room_img" id="room_img" class="bg-white" placeholder="JPG, PNG, JPEG">

                <button type="submit" style="background-color: rgb(0, 132, 255); padding: 1%; border-radius: 10px; font-weight: bold; color: white; margin-top: 1rem" >ADD ROOM</button>
            </form>
        </div>
    </div>


</x-app-layout>
