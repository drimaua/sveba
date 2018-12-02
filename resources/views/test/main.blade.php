<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

<div class="jumbotron text-center top-heading">
    <h1>СВЕТОВАЯ БАШНЯ</h1>
    <h6>АРЕНДА СВЕТОВОЙ УСТАНОВКИ</h6>
    <img src="/images/logo.png">
</div>

@include('partials.navbar')

<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-lg-12">
            @include('partials.introText')
        </div>
    </div>
    <div class="row" s>
        <div class="col-lg-3">
            @include('partials.leftside')
        </div>
        <div class="col-lg-6">
            @include('partials.carouselImages')
            <br>
            @include('partials.carouselVideo')
        </div>
        <div class="col-lg-3">
            @include('partials.rightside')
        </div>
    </div>
    <hr class="new-hr">
    <div class="row">
        <div class="col-lg-12">
            @include('partials.bottomText')
        </div>
    </div>
</div>

    @include('layouts.footer')

</body>
</html>
