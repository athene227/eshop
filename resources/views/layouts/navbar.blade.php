<nav class="fixed w-full h-[76px] flex bg-white px-[100px] z-20">
    <div class="px-[30px] m-auto w-full h-full">
        <div class="flex h-full border-b">
            <div class="flex grow h-full items-center">
                <a href="/" class="">
                    <img src="{{asset('assets/images/logo.jpg')}}" class="w-auto h-[40px]" />
                </a>
            </div>
            <ul class="flex flex-row items-center pt-[10px] text-darkblue font-semibold text-[18px] gap-6">
                <li class="h-full">
                    <a href="/" class="px-[15px] flex h-full items-center nav-item">HOME</a>
                </li>
                <li class="h-full">
                    <a href="/services" class="px-[15px] flex h-full items-center nav-item">SERVICES</a>
                </li>
                <li class="h-full">
                    <a href="/aboutus" class="px-[15px] flex h-full items-center nav-item">ABOUT US</a>
                </li>
                <li class="h-full">
                    <a href="/contact" class="px-[15px] flex h-full items-center nav-item">CONTACT</a>
                </li>
                <li class="h-full flex items-center gap-2">
                    @unless (Auth::check())
                        <a href="{{ route('loginView') }}" class="px-[7.5px] py-[15px]">
                            <i class="fa fa-user"></i>
                        </a>
                    @endunless
                    <a class="px-[7.5px] py-[15px]">
                        <i class="fa fa-search"></i>
                    </a>
                    <a class="px-[7.5px] py-[15px]">
                        <i class="fa fa-cart-shopping"></i>
                    </a>
                    @if (Auth::check())
                    <div class="relative">
                        <button id="my_account" class="h-10 w-10 rounded-full ring-2 ring-white overflow-clip">
                            <img src="{{asset('assets/images/avatars/default.jpg')}}" />
                        </button>
                        <ul id="account_menu" class="absolute right-0 z-30 bg-white border flex flex-col hidden">
                            <a href="{{route('account')}}" class="px-4 py-2 w-max hover:bg-gray-200">My account</a>
                            <a href="#" class="px-4 py-2 hover:bg-gray-200">My goods</a>
                            <a href="{{route('signout')}}" class="px-4 py-2 hover:bg-gray-200 flex gap-2 items-center border-t">
                                Sign out<i class="fa fa-arrow-right-from-bracket"></i>
                            </a>
                        </ul>
                    </div>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
