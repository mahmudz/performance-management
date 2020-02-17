@extends('layouts.app')
@section('content')
<form action="{{ route('objectives.update', $objective->id) }}" method="post">
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    <input type="hidden" name="_method" value="PUT">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10 mx-auto pool-objective">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">Objective #{{ $objective->id }}</div>
                                    <div class="col-6 text-right"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if($objective->type == 0)
                                    <div class="col-md-2">
                                        <img height="90px;" width="90px" src="{{ asset('images/' . $objective->category->name . '.jpg') }}">
                                    </div>
                                    @endif
                                    <div class="{{ ($objective->type == 0) ? 'col-md-5' : 'col-md-6' }}">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-2">Title</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control disabled" disabled readonly value="{{ $objective->title }}" name="title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="{{ ($objective->type == 0) ? 'col-md-5' : 'col-md-6' }}">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-3">Category</label>
                                            <div class="col-md-9">
                                                <select name="category_id" class="form-control disabled" disabled readonly>
                                                    @foreach($categories as $category)
                                                        <option {{ $objective->category_id == $category->id ? 'selected' : '' }}  value="{{ $category->id }}">{{ $category->name }}</option>
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
                                            <textarea name="personal_objective" class="form-control disabled" disabled readonly>{{ $objective->personal_objective }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Key Result</label>
                                            <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($objective->key_results)[0] }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($objective->key_results)[1] }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($objective->key_results)[2] }}" name="key_result[]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Target Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control disabled" disabled readonly value="{{ $objective->target_score }}" name="target_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Date to be achived</label>
                                            <div class="col-md-7">
                                                <input id="datetime" class="form-control disabled" disabled readonly value="{{ $objective->date_to_be_achived }}" name="date_to_be_achived">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                @if(Auth::user()->type == 3)
                                    <a href="{{ route('home') }}" class="btn btn-warning">Go back to pool</a>
                                @else
                                    <a href="{{ route('objectives.index') }}" class="btn btn-warning">Go back to list</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

