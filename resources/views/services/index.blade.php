@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-[76px]">
    <div class="w-full grid grid-cols-1 md:grid-cols-2">
        <div>
            <a href="{{route('services.create')}}" class="m-auto w-[250px] h-[250px]">
                Post Goods
            </a>
        </div>
        <div>
            <a href="{{route('services.list')}}" class="m-auto w-[250px] h-[250px]">
                Buy Goods
            </a>
        </div>
    </div>
</div>
@endsection
