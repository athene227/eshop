@extends('layouts.app')

@section('content')
    <!-- Welcome Begin -->
    <div class="z-0 w-full min-w-[500px] px-[50px] lg:px-[5%] grid grid-cols-1 lg:grid-cols-2 bg-gradient-to-tr from-[#30B1BF] to-[#2B1D6E] gap-[50px] lg:gap-[5%]">
        <div class="mt-[100px] lg:mt-[35%] text-white">
            <h1 class="text-[50px] whitespace-pre-wrap">Welcome to our shop</h1>
            <p class="mt-4 text-2xl">
               We greet every client as an opportunity to grow our community. Get your dream goods from our store.
            </p>
            <button class="bg-white mt-8 rounded-full py-4 px-10 flex items-center gap-2 hover:bg-gray-100 text-gray-900">
                <p class="text-2xl inline">Go shopping</p>
                <i class="fa fa-chevron-right mt-1"></i>
            </button>
        </div>
        <div class="flex py-[50px]">
            <div class="mx-auto grid grid-cols-2 gap-4">
                <a href="#" class="overflow-clip bg-white">
                    <img src="/images/tile1.png" class="hover:opacity-70 transition ease-in-out hover:scale-110">
                </a>
                <a href="#" class="overflow-clip bg-white">
                    <img src="/images/tile2.png" class="hover:opacity-70 transition ease-in-out hover:scale-110">
                </a>
                <a href="#" class="overflow-clip bg-white">
                    <img src="/images/tile3.png" class="hover:opacity-70 transition ease-in-out hover:scale-110">
                </a>
                <a href="#" class="overflow-clip bg-white">
                    <img src="/images/tile4.png" class="hover:opacity-70 transition ease-in-out hover:scale-110">
                </a>
                <a href="#" class="overflow-clip bg-white">
                    <img src="/images/tile5.png" class="hover:opacity-70 transition ease-in-out hover:scale-110">
                </a>
                <a href="#" class="overflow-clip bg-white">
                    <img src="/images/tile6.png" class="hover:opacity-70 transition ease-in-out hover:scale-110">
                </a>
            </div>
        </div>
    </div>
    <!-- Welcome End -->

    <!-- Services Begin -->
    <div class="w-full px-[50px]">

    </div>
    <!-- Services End -->
@endsection
