@props(['article'])

<article class="hero__slide swiper-slide">
    <div class="hero__entry-image" style="background-image: url('{{ $article['urlToImage'] }}');"></div>
    <div class="hero__entry-text">
        <div class="hero__entry-text-inner">
            <div class="hero__entry-meta">
                <span class="cat-links">
                    <a href="#">{{ $article['source']['name'] }}</a>
                </span>
            </div>
            <h2 class="hero__entry-title">
                <a href="{{ $article['url'] }}">
                    {{ substr($article['title'], 0, strrpos( $article['title'], '-') ) }}
                </a>
            </h2>
            <p class="hero__entry-desc">
            {{ $article['description'] }}
            </p>
            <a class="hero__more-link" href="{{ $article['url'] }}" target="_blank">Read More</a>
        </div>
    </div>
</article>
