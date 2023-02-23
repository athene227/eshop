@extends('layouts/app')
@section('content')
<div class="cotainer z-0 h-full inset-0 mt-[76px] bg-cover flex flex-col justify-center">
    <div class="w-full max-w-xs m-auto h-[580px] bg-white rounded p-5 drop-shadow-[0_15px_30px_rgba(173,173,173,0.2)]">
        <header>
            <img class="w-20 mx-auto mb-5" src="https://img.icons8.com/fluent/344/year-of-tiger.png" />
        </header>
        <form method="POST" action="{{ route('login.custom') }}">
            @csrf
            <div>
                <label class="block mb-2 text-indigo-500" for="first_name">First Name</label>
                <input type="text" placeholder="First Name" id="first_name" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" name="first_name" required
                    autofocus>
                @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="last_name">Last Name</label>
                <input type="text" placeholder="Last Name" id="last_name" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" name="last_name" required
                    autofocus>
                @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="email">Email</label>
                <input type="text" placeholder="Email" id="email" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" name="email" required
                    autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div>
                <label class="block mb-2 text-indigo-500" for="password">Password</label>
                <input type="password" placeholder="Password" id="password" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="flex flex-row-reverse">
                <button type="submit" class="rounded px-6 py-2 text-white text-bold bg-indigo-500 hover:bg-indigo-700">Sign up</button>
            </div>
        </form>
    </div>
</div>
@endsection
