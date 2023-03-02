@extends('layouts.app')

@section('content')
<div class="w-full px-[50px] lg:px-[100px] pt-[76px] pb-[30px]">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mt-[20px]">
        @foreach ($items as $item)
        <div class="relative">
            <a href="{{route('services.show', $item->id)}}">
                <div class="bg-contain bg-center h-[220px] m-auto" style="background-image:url(assets/images/goods/{{$item->image}}); background-repeat:no-repeat;"></div>
            </a>
            <div class="w-full bg-white text-center px-[20px]">
                <p class="text-gray-400 overflow-wrap">
                    {{$item->name}}
                </p>
                <p class="text-gray-600">
                    ${{number_format($item->price)}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
