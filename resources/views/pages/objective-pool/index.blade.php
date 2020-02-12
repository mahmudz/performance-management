@extends('layouts.app')
@section('content')
<div class="container-fluid" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Objective Pool</h4>
                </div>
                <div class="card-body">
                    <div>
                        <div class="row">
                           @for ($i = 0; $i < $totalObjectives; $i++)
                                <div class="objective-source col-md-4">
                                    <div class="div">

                                    @if(isset($objectives[$i]))
                                        <div class="objective ui-state-default" data-id="{{ $objectives[$i]->id }}">
                                            <div class="row">
                                                <div class="col-7">
                                                    <a href="{{ route('objectives.show', $objectives[$i]->id) }}">{{ $objectives[$i]->title }}</a>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <span class="badge badge-success">{{ $objectives[$i]->category->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4>My Objectives</h4>
                </div>
                <div class="card-body">
                    <div class="dropbox">
                        <div class="row">
                            @for ($i = 0; $i < 12; $i++)
                                <div class="col-md-4">
                                    <div class="dropzone ui-widget-header">
                                        @if(isset($myAssignedObjectives[$i]))
                                            <div class="objective ui-state-default" data-id="{{ $myAssignedObjectives[$i]->objective->id }}">
                                                <div class="row">
                                                    <div class="col-8">
                                                        <a href="{{ route('objectives.show', $myAssignedObjectives[$i]->objective->id) }}">{{ $myAssignedObjectives[$i]->objective->title }}</a>
                                                    </div>
                                                    <div class="col-4 text-center">
                                                        <span class="badge badge-success">{{ $myAssignedObjectives[$i]->objective->category->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/pool.css') }}">
@endpush

@push('script')
    <script defer src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/pool.js') }}"></script>
@endpush
