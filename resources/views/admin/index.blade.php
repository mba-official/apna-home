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
                <x-nav-link href="{{route('rooms-list') }}" :active="request()->routeIs('admin-dashboard')">
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
            font-size: 16px;
            width: 50rem;
            background-color: rgb(0, 119, 255);
            
        }
        tr{
            height: 5rem;
        }
        td{
            font-size: 14px;
            height: 6rem;
            background-color: rgb(41, 75, 52);
            border: 2px solid black
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
            <h1 class="heading">BOOKINGS</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Room User</th>
                        <th>User Email</th>
                        <th>User Phone No</th>
                        <th>Room Number</th>
                        <th>Room Title</th>
                        <th>Room From</th>
                        <th>Room To</th>
                        <th>Room Price</th>
                        <th>Send Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->room_user_name}}</td>
                            <td>{{$book->room_user_email}}</td>
                            <td>{{$book->room_user_phonenumber}}</td>
                            <td>{{$book->room_number}}</td>
                            <td>{{$book->room_title}}</td>
                            <td>{{$book->room_sdate}}</td>
                            <td>{{$book->room_edate}}</td>
                            <td>{{$book->room_price}}</td>
                            {{-- <td>Edit / Delete</td> --}}
                            <td>
                                <a href="#" style="color:black; padding:0.5rem; background-color: rgb(255, 213, 0); border-radius: 8px">Send</a>
                            </td>
                            {{-- <td>
                                <form action="{{route('delete-room', $room->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('You are going to delete this room are you sure?')" style="color:black; border-radius: 8px; padding:0.4rem; background-color: rgb(206, 68, 68);">Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div></center>
    



</x-app-layout>
