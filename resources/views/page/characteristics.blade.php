<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

@include('layouts.top')

@include('partials.navbar')

<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-lg-12">
            @include('partials.introText')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9 plank-text">
            {{--@include('partials.leftside')--}}
            @include('partials.characteristics')
        </div>
        <div class="col-lg-3 text-center">
            @include('partials.carouselImages')
            @include('partials.partners')
        </div>
    </div>
    <hr class="new-hr">
    <div class="row">
        <div class="col-lg-12">
            @include('partials.swiperVideo')
        </div>
    </div>
</div>

    @include('layouts.footer')

</body>
</html>
