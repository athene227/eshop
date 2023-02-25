<nav class="fixed w-full h-[100px] flex bg-white px-[100px] z-20">
    <div class="px-[30px] m-auto w-full">
        <div class="flex h-full pb-[10px] border-b">
            <div class="flex grow h-full items-center">
                <a href="/" class="">
                    <img src="{{asset('assets/images/logo.jpg')}}" class="w-auto h-[40px]" />
                </a>
            </div>
            <ul class="flex flex-row items-center text-[#24419A] font-semibold text-[18px] gap-6">
                <li>
                    <a href="/" class="p-[15px] nav-item">HOME</a>
                </li>
                <li>
                    <a href="/services" class="p-[15px] nav-item">SERVICES</a>
                </li>
                <li>
                    <a href="/aboutus" class="p-[15px] nav-item">ABOUT US</a>
                </li>
                <li>
                    <a href="/contact" class="p-[15px] nav-item">CONTACT</a>
                </li>
                <li>
                    @unless(Auth::check())
                        <a href="{{ route('loginView') }}">
                            <i class="fa fa-user"></i>
                        </a>
                    @endunless
                    <a class="px-[7.5px] py-[15px]">
                        <i class="fa fa-search"></i>
                    </a>
                    <a class="px-[7.5px] py-[15px]">
                        <i class="fa fa-cart-shopping"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
