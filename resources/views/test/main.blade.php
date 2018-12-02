<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

<div class="jumbotron text-center top-heading">
    <h1>СВЕТОВАЯ БАШНЯ</h1>
    <h6>АРЕНДА СВЕТОВОЙ УСТАНОВКИ</h6>
</div>

@include('partials.navbar')

<div class="container" style="margin-top:30px">
    <div class="row" s>
        <div class="col-lg-3">
            @include('partials.leftside')
        </div>
        <div class="col-lg-6">
            @include('partials.introText')
            @include('partials.carouselImages')
            <br>
            @include('partials.carouselVideo')
        </div>
        <div class="col-lg-3">
            @include('partials.rightside')
        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <p>Footer</p>
</div>

</body>
</html>
