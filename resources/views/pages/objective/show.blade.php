@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10 mx-auto pool-objective">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">{{ $objective->category->name }}</div>
                                    <div class="col-6 text-right"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-2">Title</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly disabled value="{{ $objective->title }}" name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Personal Objective</label>
                                            <textarea name="personal_objective" class="form-control" readonly disabled>{{ $objective->personal_objective }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Key Result</label>
                                            <input type="text" class="form-control" readonly disabled value="{{ json_decode($objective->key_results)[0] }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" readonly disabled value="{{ json_decode($objective->key_results)[1] }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" readonly disabled value="{{ json_decode($objective->key_results)[2] }}" name="key_result[]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Target Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" readonly disabled value="{{ $objective->target_score }}" name="target_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Date to be achived</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" readonly disabled value="{{ $objective->date_to_be_achived }}" name="date_to_be_achived">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a href="{{ route('objectives.index') }}" class="btn btn-success">Go to list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
