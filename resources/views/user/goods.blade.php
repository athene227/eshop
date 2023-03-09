@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-[76px]">
    <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-[40px] border">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col" class="px-6 py-3">Amount</th>
                <th scope="col" class="px-6 py-3">Buyers</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($goods as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-t">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item->name}}</th>
                    <td class="px-6 py-4">{{$item->price}}</td>
                    <td class="px-6 py-4">{{$item->amount}}</td>
                    <td class="px-6 py-4">
                        @foreach ($item->buyers as $buyer)
                            <p>{{$buyer->name}}</p>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
