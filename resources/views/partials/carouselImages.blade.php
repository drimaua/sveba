<div id="carouselImages" class="carousel slide carouselImages carousel-margins" data-ride="carousel" data-interval="0">
    <ol class="carousel-indicators">
        @for($i = 0; $i < count($imgSmall); $i++)
            <li data-target="#carouselImages" data-slide-to="{{ $i }}" @if($i==0)class="active"@endif></li>
        @endfor
    </ol>
    <div class="carousel-inner">
        @foreach($imgSmall as $key => $img)
            <div class="carousel-item @if($key==0) active @endif">
                <img class="d-block w-100" src="/images/carousel/small/{{ $img }}">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselImages" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselImages" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div id="carouselImag2" class="carousel slide carouselImages" data-ride="carousel" data-interval="0">
    <ol class="carousel-indicators">
        @for($i = 0; $i < count($imgBig); $i++)
            <li data-target="#carouselImag2" data-slide-to="{{ $i }}" @if($i==0)class="active"@endif></li>
        @endfor
    </ol>
    <div class="carousel-inner">
        @foreach($imgBig as $key => $img)
            <div class="carousel-item @if($key==0) active @endif">
                <img class="d-block w-100" src="/images/carousel/big/{{ $img }}">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselImag2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselImag2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>