@extends('layouts/app')
@section('content')
<div class="cotainer z-0 h-[100vh] inset-0 absolute mx-auto pt-[100px] flex">
    <div class="min-w-[400px] w-[400px] lg:w-[500px] m-auto rounded-xl drop-shadow-[0_15px_15px_rgba(173,173,173,0.5)] bg-white px-[30px] py-[30px]">
        <header class="w-full text-center mt-[10px] mb-[40px]">
            <h2 class="font-bold text-[#24419A] text-[50px]">SIGN UP</h2>
        </header>
        <form method="POST" action="{{ route('register') }}" class="mt-4">
            @csrf
            <div>
                <label class="mb-2 text-blue-500" for="email">
                    <i class="fa fa-user"></i>
                    First Name
                </label>
                <input type="text" placeholder="First Name" id="first_name" class="w-full p-2 mt-2 mb-6 border-b-2 border-blue-500 outline-none focus:bg-gray-300" name="first_name" required
                    autofocus>
                @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
            </div>
            <div>
                <label class="mb-2 text-blue-500" for="last_name">
                    <i class="fa fa-user"></i>
                    Last Name
                </label>
                <input type="text" placeholder="Last Name" id="last_name" class="w-full p-2 mt-2 mb-6 border-b-2 border-blue-500 outline-none focus:bg-gray-300" name="last_name" required
                    autofocus>
                @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
            </div>
            <div>
                <label class="mb-2 text-blue-500" for="email">
                    <i class="fa fa-envelope"></i>
                    Email
                </label>
                <input type="text" placeholder="Email" id="email" class="w-full p-2 mt-2 mb-6 border-b-2 border-blue-500 outline-none focus:bg-gray-300" name="email" required
                    autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div>
                <label class="mb-2 text-blue-500 " for="password">
                    <i class="fa fa-key"></i>
                    Password
                </label>
                <input type="password" placeholder="Password" id="password" class="w-full mt-2 p-2 mb-6 text-blue-700 border-b-2 border-blue-500 outline-none focus:bg-gray-300" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="flex justify-between">
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="rounded w-4 h-4 border-blue-700 hover:border-blue-500 active:bg-blue-700 active:text-white">
                    <label>
                        Remember Me
                    </label>
                </div>
                <button type="submit" class="rounded px-6 py-2 text-white text-bold bg-blue-500 hover:bg-blue-700">
                    Sign up<i class="fa fa-right-from-bracket ml-2"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
