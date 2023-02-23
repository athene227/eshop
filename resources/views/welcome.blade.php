@extends('layouts.app')

@push('style')
<style>
    .carousel-open:checked + .carousel-item {
        position: static;
        opacity: 100;
    }
    .carousel-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }
    #carousel-1:checked ~ .control-1,
    #carousel-2:checked ~ .control-2,
    #carousel-3:checked ~ .control-3 {
        display: block;
    }
    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }
    #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
    }
</style>
@endpush

@section('content')
    <div class="absolute inset-0 z-0 w-full h-full flex bg-[url('/images/back.png')] bg-cover">
        <div class="absolute w-full h-full pt-[76px] mx-auto opacity-50">
            <div class="slide relative h-full">
                <div class="grid grid-cols-2 lg:grid-cols-3 place-content-center">
                    <div>
                        <img src="/images/tile1.png" />
                    </div>
                    <div>
                        <img src="/images/tile2.png" />
                    </div>
                    <div>
                        <img src="/images/tile3.png" />
                    </div>
                    <div>
                        <img src="/images/tile4.png" />
                    </div>
                    <div>
                        <img src="/images/tile5.png" />
                    </div>
                    <div>
                        <img src="/images/tile6.png" />
                    </div>
                </div>
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower One Caption</div>
            </div>

            <div class="slide relative h-full">
                <img class="w-full h-full object-cover"
                    src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-2.jpeg">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Two Caption</div>
            </div>

            <div class="slide relative h-full">
                <img class="w-full h-full object-cover"
                    src="https://www.kindacode.com/wp-content/uploads/2022/07/flower-3.jpeg">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Flower Three Caption
                </div>
            </div>

            <!-- The previous button -->
            <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                onclick="moveSlide(-1)">❮</a>

            <!-- The next button -->
            <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                onclick="moveSlide(1)">❯</a>

        </div>
    </div>
@endsection

@push('script')
<script>
    // set the default active slide to the first one
    let slideIndex = 1;
    showSlide(slideIndex);

    // change slide with the prev/next button
    function moveSlide(moveStep) {
        showSlide(slideIndex += moveStep);
    }

    // change slide with the dots
    function currentSlide(n) {
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        let i;
        const slides = document.getElementsByClassName("slide");
        const dots = document.getElementsByClassName('dot');

        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        // hide all slides
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.add('hidden');
        }

        // remove active status from all dots
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove('bg-yellow-500');
            dots[i].classList.add('bg-green-600');
        }

        // show the active slide
        slides[slideIndex - 1].classList.remove('hidden');

        // highlight the active dot
        dots[slideIndex - 1].classList.remove('bg-green-600');
        dots[slideIndex - 1].classList.add('bg-yellow-500');
    }
</script>
@endpush
