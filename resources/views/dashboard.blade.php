<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
        <div class="flex">
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
        </div>
    </div>
    @if (session('book_status'))
    <div class="text-center text-white" 
    style="font-size: 20px; 
    width: 35rem;
    background-color: #27324b;
    border-radius: 5px;
    margin: auto;
    padding: 39px;
    box-shadow: 0px 0px 9px 3px #ffffff78; ">
      {{session("book_status")}}
    </div>
  @endif
</x-app-layout>
