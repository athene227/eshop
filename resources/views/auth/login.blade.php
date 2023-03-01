@extends('layouts/app')
@section('content')
<div class="cotainer z-0 h-[100vh] inset-0 absolute mx-auto pt-[76px] flex">
    <div class="min-w-[400px] w-[400px] lg:w-[500px] m-auto rounded-xl drop-shadow-[0_15px_15px_rgba(173,173,173,0.5)] bg-white px-[30px] py-[30px]">
        <header class="w-full text-center mt-[10px] mb-[40px]">
            <h2 class="font-bold text-[#24419A] text-[50px]">LOGIN</h2>
        </header>
        {{-- <button class="bg-blue-500 text-white w-full py-2 rounded shadow-[0_4px_4px_rgba(0,0,0,0.3)] hover:bg-blue-700">
            <i class="fa fa-google mr-4"></i>Sign in with Google
        </button> --}}
        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf
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
                    Sign in<i class="fa fa-right-from-bracket ml-2"></i>
                </button>
            </div>
        </form>
        <footer class="mt-4 flex justify-between">
            <a class="text-blue-700 hover:text-pink-700 text-sm" href="#">Forgot Password?</a>
            <a class="text-blue-700 hover:text-pink-700 text-sm" href="{{ route('registerView') }}">Create Account</a>
        </footer>
    </div>
</div>
@endsection
