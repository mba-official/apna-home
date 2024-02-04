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
<style>
    .rooms-list{
        margin: auto;
        text-align: center;
        color: white;
        width: 90%;
        margin-top: 2rem;
        height: 100%;
    }
    .heading{
        font-size: 40px;
        color:white;
        margin-bottom: 0.6rem;
    }
    th{
        font-size: 22px;
        width: 10rem;
        background-color: rgb(0, 119, 255);
        
    }
    tr{
        height: 5rem;
    }
    td{
        font-size: 18px;
        height: 6rem;
        background-color: rgb(41, 75, 52);
        border: 2px solid black
    }
    .desc{
        width: 30rem;
    }

</style>

    <center><div class="rooms-list">
        @if (session('update_status'))
                <div id="msg" class="text-white text-center" style="font-size: 20px; background-color: rgba(21, 126, 21, 0.853); padding: 1rem; margin-bottom: 1rem">
                    <strong>Success! </strong>{{session('update_status')}}
                </div>
        @endif
        @if (session('delete_status'))
                <div id="msg" class="text-white text-center" style="font-size: 20px; background-color: rgba(21, 126, 21, 0.853); padding: 1rem; margin-bottom: 1rem">
                    <strong>Success! </strong>{{session('delete_status')}}
                </div>
        @endif
        <h1 class="heading">ROOM LIST</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Title</th>
                    <th>Room Price</th>
                    <th class="desc">Room Description</th>
                    <th>Room Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td>{{$room->id}}</td>
                        <td>{{$room->room_title}}</td>
                        <td>{{$room->room_price}}</td>
                        <td id="des">{{$room->room_desc}}</td>
                        <td> <img src="room_img/{{$room->room_img}}"></td>
                        {{-- <td>Edit / Delete</td> --}}
                        <td>
                            <a href="{{url('edit-rooms', $room->id)}}" style="color:black; padding:0.5rem; background-color: rgb(255, 213, 0); border-radius: 8px">Update</a>
                        </td>
                        <td>
                            <form action="{{route('delete-room', $room->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('You are going to delete this room are you sure?')" style="color:black; border-radius: 8px; padding:0.4rem; background-color: rgb(206, 68, 68);">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div></center>



</x-app-layout>
