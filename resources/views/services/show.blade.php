@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-[76px]">
    <div class="grid grid-cols-1 md:grid-cols-2 mt-[20px]">
        <div style="justify-self: right;">
            <img src="{{asset('assets/images/goods/'.$item->image)}}" />
        </div>
        <div style="padding: 30px;">
            <h2 class="text-gray-600 text-[30px]">
                {{$item->name}}
            </h2>
            <p class="text-gray-400 mt-2">
                ${{$item->price}}
            </p>
            <div class="mt-4">
                @auth
                <a href="{{route('payment')}}?price={{$item->price}}" class="px-[20px] py-[10px] bg-darkblue hover:bg-darkblue-dark text-white rounded">
                    Purchase
                </a>
                @endauth
                @guest
                    <a href="{{route('loginView')}}" class="px-[20px] py-[10px] bg-darkblue hover:bg-darkblue-dark text-white">
                        Login to Purchase
                    </a>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection
