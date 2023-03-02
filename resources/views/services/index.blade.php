@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-[76px]">
    <div class="w-full mt-[40px] grid grid-cols-1 md:flex md:justify-center md:gap-[100px] md:mt-[100px]">
        <div>
            <div class="flex items-center justify-center">
                <a @auth href="{{route('services.create')}}" @endauth class="m-auto w-[250px] h-[250px]">
                    <img src="{{asset('assets/images/post.png')}}" @auth class="services-img" @else style="filter: grayscale(100%)" @endauth />
                </a>
            </div>
            <div class="mt-5">
                <h3 class="text-[18px] text-gray-600 text-center">Post Goods</h3>
                <p class="mt-3 text-gray-400 text-center">You can post goods from here.</p>
                @guest
                    <p class="mt-3 text-rose-800 text-center">Log In to purchase goods</p>
                    <a href="{{route('loginView')}}" class="mt-2 flex justify-center items-center rounded-md border border-transparent bg-darkblue py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-darkblue-dark focus:outline-none focus:ring-2 focus:ring-darkblue focus:ring-offset-2">
                        Log In
                    </a>
                @endguest
            </div>
        </div>
        <div>
            <div class="flex items-center justify-center">
                <a href="{{route('services.list')}}" class="m-auto w-[250px] h-[250px]">
                    <img src="{{asset('assets/images/buy.png')}}" class="services-img" />
                </a>
            </div>
            <div class="mt-5">
                <h3 class="text-[18px] text-gray-600 text-center">Buy Goods</h3>
                <p class="mt-3 text-gray-400 text-center">You can buy goods from here.</p>
            </div>
        </div>
    </div>
</div>
@endsection
