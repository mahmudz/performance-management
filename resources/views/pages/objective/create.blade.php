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
                                                <input type="text" name="colleague_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Role</label>
                                            <div class="col-md-8">
                                                <select name="role" id="" class="form-control">
                                                    <option value="Software Engineer">Software Engineer</option>
                                                    <option value="UI Engineer">UI Engineer</option>
                                                    <option value="Product Manager">Product Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Division</label>
                                            <div class="col-md-8">
                                                <select name="division" id="" class="form-control">
                                                    <option value="Tech">Tech</option>
                                                    <option value="Marketing">Marketing</option>
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
                                                <input type="text" class="form-control" name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Personal Objective</label>
                                            <textarea name="personal_objective" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Key Result</label>
                                            <input type="text" class="form-control" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="key_result[]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Current Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="current_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Target Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="target_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Date to be achived</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" name="date_to_be_achived">
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
