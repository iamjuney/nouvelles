@props(['article'])

<article class="brick entry" data-animate-el>

    <div class="entry__thumb">
        <a href="{{ $article['url'] }}" class="thumb-link">
            <img src="{{ $article['urlToImage'] }}" alt="">
        </a>
    </div> <!-- end entry__thumb -->

    <div class="entry__text">
        <div class="entry__header">
            <div class="entry__meta">
                <span class="cat-links">
                    <a href="#">{{ $article['source']['name'] }}</a>
                </span>
                <span class="byline">
                    By:
                    <a href="#">
                    @if ($article['author'] != null)
                        {{ $article['author'] }}
                    @else
                        Anonymous
                    @endif
                    </a>
                </span>
            </div>
            <h1 class="entry__title"><a href="{{ $article['url'] }}">
                {{ substr($article['title'], 0, strrpos( $article['title'], '-') ) }}</a>
            </h1>
            </div>
        <div class="entry__excerpt">
            <p>
            {{ $article['description'] }}
            </p>
        </div>
        <a class="entry__more-link" href="{{ $article['url'] }}">Read More</a>
    </div> <!-- end entry__text -->

</article> <!-- end article -->
