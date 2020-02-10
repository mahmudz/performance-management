@extends('layouts.app')
@section('content')
<form action="{{ route('objectives.store') }}" method="post">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <div class="col-md-10 mx-auto pool-objective">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">Leadership</div>
                                    <div class="col-6 text-right"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="https://picsum.photos/120/100" alt="">
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for="" class="col-md-4 col-form-label">Number</label>
                                            <div class="col-md-8">
                                                <input type="text" name="colleague_number" class="form-control" value="{{ old('colleague_number') }}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Role</label>
                                            <div class="col-md-8">
                                                <select name="role" class="form-control">
                                                    <option {{ (old('role') == 'Software Engineer') ? 'selected' : '' }} value="Software Engineer">Software Engineer</option>
                                                    <option {{ (old('role') == 'UI Engineer') ? 'selected' : '' }} value="UI Engineer">UI Engineer</option>
                                                    <option {{ (old('role') == 'Product Manager') ? 'selected' : '' }} value="Product Manager">Product Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Division</label>
                                            <div class="col-md-8">
                                                <select name="division" class="form-control">
                                                    <option {{ old('division') == 'Tech' ? 'selected' : '' }} value="Tech">Tech</option>
                                                    <option {{ old('division') == 'Marketing' ? 'selected' : '' }} value="Marketing">Marketing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-2">Title</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" value="{{ old('title') }}" name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Personal Objective</label>
                                            <textarea name="personal_objective" class="form-control">{{ old('personal_objective') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Key Result</label>
                                            <input type="text" class="form-control" value="{{ old('key_result') }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('key_result') }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('key_result') }}" name="key_result[]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Current Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="{{ old('current_score') }}" name="current_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Target Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="{{ old('target_score') }}" name="target_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Date to be achived</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="{{ old('date_to_be_achived') }}" name="date_to_be_achived">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-success">Save Objective</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
