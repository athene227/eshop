@extends('layouts.app')

@section('content')
<div class="container mx-auto pt-[76px]">
    <form action="{{route('services.store')}}" method="POST" class="mt-5 min-w-[500px] md:w-[500px] mx-auto" enctype="multipart/form-data">
        @csrf
        <div class="overflow-hidden shadow border sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm hidden">
                        <a href="#" id="img_upload_btn">
                            <img src="{{asset('assets/images/goods/'.$default_image)}}" width="200px" height="200px" class="mx-auto" id="good_image" />
                        </a>
                    </div>

                    <div class="col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6">
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" step="0.01" name="price" id="price"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-6">
                        <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                        <input type="number" step="1" name="amount" id="amount"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-darkblue py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-darkblue-dark focus:outline-none focus:ring-2 focus:ring-darkblue focus:ring-offset-2">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('script')
<script>
    $(function () {
        $("#img_upload_btn").click(function (e) {
            e.preventDefault();
            $("#image").click();
        })

        $("#image").change(function (e) {
            console.log(e.target.files[0]);
            $("#img_upload_btn>img").attr('src', URL.createObjectURL(e.target.files[0]));
        })
    })
</script>
@endpush
