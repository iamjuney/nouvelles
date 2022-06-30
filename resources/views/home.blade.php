
<x-layout>
    <x-slot name="title">Home</x-slot>

    <!-- hero -->
    <div class="hero">
        <div class="hero__slider swiper-container">
            <div class="swiper-wrapper">

                @for ( $i = 0; $i < 3; $i++)
                    <x-hero_slide :article="$articles[$i]" />
                @endfor

            </div> <!-- swiper-wrapper -->

            <div class="swiper-pagination"></div>

        </div> <!-- end hero slider -->

        <a href="#bricks" class="hero__scroll-down smoothscroll">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 12H5"></path>
            </svg>
            <span>Scroll</span>
        </a>

    </div> <!-- end hero -->


    <!--  masonry -->
    <div id="bricks" class="bricks">
        <div class="masonry">
            <div class="bricks-wrapper" data-animate-block>
                <div class="grid-sizer"></div>

                @for ( $i = 3; $i < count($articles); $i++)
                    <x-article :article="$articles[$i]" />
                @endfor

            </div> <!-- end bricks-wrapper -->

        </div> <!-- end masonry-->

    </div> <!-- end bricks -->
</x-layout>
