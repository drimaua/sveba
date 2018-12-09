@extends('layouts.master')

@section('content')

<div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-lg-12">
            @include('partials.introText')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 plank-text">
            {{--@include('partials.leftside')--}}
            @include('partials.description')
        </div>
        <div class="col-lg-5 text-center">
            @include('partials.carouselImages')
        </div>
        <div class="col-lg-3 plank-text">
            @include('partials.usage')
        </div>
    </div>
    <hr class="new-hr">

    <div class="row">
        <div class="col-lg-12">
            @include('partials.swiperVideo')
        </div>
    </div>
</div>

@endsection
