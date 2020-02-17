@extends('layouts.app')
@section('content')
<div class="container-fluid" id="app">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h5>Objective Pool</h5>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-success" href="#addObjectiveModal" data-toggle="modal">Add Objective</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="pool">
                        <div class="row">
                           @for ($i = 0; $i < $totalObjectives; $i++)
                                <div class="col-md-4">
                                    <div class="objective-source ui-widget-header">
                                        @if(isset($objectives[$i]))
                                            <div class="objective ui-state-default" data-id="{{ $objectives[$i]->id }}">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="{{ route('objectives.show', $objectives[$i]->id) }}">{{ $objectives[$i]->title }}</a>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        @if($objectives[$i]->type == 0)
                                                            <span class="badge badge-warning">Competency</span>
                                                            <span class="badge badge-success">{{ $objectives[$i]->category->name }}</span>
                                                        @else
                                                            <span class="badge badge-success">{{ $objectives[$i]->category->name }}</span>
                                                        @endif
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
                                                        @if($myAssignedObjectives[$i]->objective->type == 0)
                                                            <span class="badge badge-warning">Competency</span>
                                                            <span class="badge badge-success">{{ $myAssignedObjectives[$i]->objective->category->name }}</span>
                                                        @else
                                                            <span class="badge badge-success">{{ $myAssignedObjectives[$i]->objective->category->name }}</span>
                                                        @endif
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


<div class="modal fade" id="addObjectiveModal">
    <div class="modal-dialog  modal-lg" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-content">
            <form action="{{ route('objectives.store') }}" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Add Objective</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for=""  class="col-md-2">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" required value="{{ old('title') }}" name="title">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for=""  class="col-md-3">Category</label>
                                    <div class="col-md-9">
                                        <select name="category_id" class="form-control" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Personal Objective</label>
                                    <textarea name="personal_objective" class="form-control" required>{{ old('personal_objective') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Key Result</label>
                                    <input type="text" class="form-control" required value="{{ old('key_result') }}" name="key_result[]">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required value="{{ old('key_result') }}" name="key_result[]">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required value="{{ old('key_result') }}" name="key_result[]">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <div class="form-group row">
                                    <label for=""  class="col-md-5 col-form-label">Target Score</label>
                                    <div class="col-md-7">
                                        <input type="number" min="1" max="5" step="0.1" class="form-control" required value="{{ old('target_score') }}" name="target_score">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for=""  class="col-md-5 col-form-label">Date to be achived</label>
                                    <div class="col-md-7">
                                        <input id="date_to_be_achived" class="form-control" required value="{{ old('date_to_be_achived') }}" name="date_to_be_achived">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
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
    <script type="text/javascript">
         $('#date_to_be_achived').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    </script>
@endpush
