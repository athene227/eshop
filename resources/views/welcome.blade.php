@extends('layouts.app')

@section('content')
    <!-- Welcome Begin -->
    <div class="w-full h-[100vh] absolute inset-0 pt-[100px] px-[100px] md:grid md:grid-cols-2 md:gap-2 z-0">
        <div class="my-auto text-center">
            <h1 class="text-[50px] font-bold whitespace-pre-wrap text-[#24419A]">Welcome to our shop</h1>
            <p class="mt-4 text-[20px] font-semibold">
               We greet every client as an opportunity to grow our community.
               <br>Get your dream goods from our store.
            </p>
            <button class="bg-[#24419A] text-white mt-8 rounded-full py-4 px-10 flex items-center mx-auto gap-2 hover:bg-[#2441A9]">
                <p class="text-2xl inline">Go shopping</p>
                <i class="fa fa-chevron-right mt-1"></i>
            </button>
        </div>
        <div class="h-full flex items-center justify-center">
            <img src="{{asset('assets/images/hand.jpg')}}" />
        </div>
    </div>
    <!-- Welcome End -->
@endsection

