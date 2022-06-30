<x-layout>
    <x-slot name="title">{{ ucfirst($category) }}</x-slot>

    <!-- pageheader -->
    <div class="s-pageheader">
        <div class="row">
            <div class="column large-12">
                <h1 class="page-title">
                    <span class="page-title__small-type">Category:</span>
                    {{ ucfirst($category) }}
                </h1>
            </div>
        </div>
    </div> <!-- end s-pageheader-->

    <!--  masonry -->
    <div id="bricks" class="bricks">

        <div class="masonry">

            <div class="bricks-wrapper" data-animate-block>

                <div class="grid-sizer"></div>

                @foreach ($articles as $article)
                    <x-article :article="$article" />
                @endforeach

            </div> <!-- end bricks-wrapper -->

        </div> <!-- end masonry-->

    </div> <!-- end bricks -->
</x-layout>
