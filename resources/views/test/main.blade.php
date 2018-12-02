<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

<div class="jumbotron text-center top-heading">
    <img src="/images/tower.png" class="top-tower">
    <h1>СВЕТОВАЯ БАШНЯ</h1>
    <img src="/images/logo.png">
</div>

@include('partials.navbar')

<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-lg-12">
            @include('partials.introText')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 plank-text">
            @include('partials.leftside')
        </div>
        <div class="col-lg-5">
            @include('partials.carouselImages')
        </div>
        <div class="col-lg-4 plank-text">
            @include('partials.rightside')
        </div>
    </div>
    <hr class="new-hr">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            @include('partials.carouselVideo')
        </div>
        <div class="col-lg-3">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @include('partials.bottomText')
        </div>

    </div>
</div>

    @include('layouts.footer')

</body>
</html>
