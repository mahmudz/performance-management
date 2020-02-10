@extends('layouts.app')
@section('content')
<div class="container-fluid" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4>Objective Pool</h4>
            <div class="row">
               @foreach($objectives as $objective)
                    <div class="objective col-md-4">
                        <div class="row">
                            <div class="col-8">
                                <a href="">{{ $objective->title }}</a>
                            </div>
                            <div class="col-4 text-center">
                                <span class="badge badge-success">{{ $objective->category }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        <div class="col-md-12 mt-5">
            <h4>My Objectives</h4>
            <div class="dropbox">
                <div class="row">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="col-md-4 dropzone">

                        </div>
                    @endfor
                </div>
            </div>

        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ asset('css/pool.css') }}">
    <style type="text/css">
        .objective {
            border-radius: 3px;
            box-shadow: 1px 2px 6px 0px #0000001a;
            padding: 16px;
            display: inline-block;
            margin: 5px 5px;
        }
        @media (min-width: 768px){
            .col-md-4 {
                -ms-flex: 0 0 32.333333% !important;
                flex: 0 0 32.333333% !important;
                max-width: 32.333333% !important;
            }
        }

    </style>
@endpush

@push('script')
    <script defer src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/draggabilly@2/dist/draggabilly.pkgd.min.js"></script>
    <script src="https://unpkg.com/interactjs/dist/interact.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/pool.js') }}"></script>
@endpush
