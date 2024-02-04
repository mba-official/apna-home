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
            font-size: 24px;
            width: 50rem;
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
    
    </style>
        <center><div class="rooms-list">
            <h1 class="heading">COMPLAINS</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($complains as $complain)
                        <tr>
                            <td>{{$complain->id}}</td>
                            <td>{{$complain->name}}</td>
                            <td>{{$complain->email}}</td>
                            <td>{{$complain->message}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div></center>
    



</x-app-layout>
