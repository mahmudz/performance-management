@extends('layouts.app')
@section('content')
<div class="container-fluid" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4>Objective Pool</h4>
        </div>
        <div class="col-md-12" id="objectivePool">
            @include('components.tile')
            @include('components.tile')
            @include('components.tile')
            @include('components.tile')
        </div>

        <div class="col-md-12 mt-5">
            <h4>My Objectives</h4>
            <div class="row">
                <div class="col-md-10 mx-auto dropbox">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js"></script>
    <script src="https://unpkg.com/interactjs/dist/interact.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script type="text/javascript">
        let app = new Vue({
            el: '#app'
        });

        $(document).ready(function(){

            $('#objectivePool').slick({
                draggable: false,
                infinite: true,
                slidesToShow: 1,
                variableWidth: false,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '60px',
                nextArrow: '<button class="slider-arrow slider-next btn btn-primary"><i class="fa fa-angle-right"></i></button>',
                prevArrow: '<button class="slider-arrow slider-prev btn btn-primary"><i class="fa fa-angle-left"></i></button>'
            });

            $(".addToList").click(function() {
                var $objective = $("#objective" + $(this).attr('data-id')).html();
                $('.dropbox').append($objective);
            });
        });
    </script>
@endpush
