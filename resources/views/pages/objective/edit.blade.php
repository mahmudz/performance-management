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
                                                <input type="text" name="colleague_number" class="form-control" value="{{ $objective->colleague_number }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control" value="{{ $objective->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Role</label>
                                            <div class="col-md-8">
                                                <select name="role" class="form-control">
                                                    <option  {{ ($objective->role == 'Software Engineer') ? 'selected' : '' }}  value="Software Engineer">Software Engineer</option>
                                                    <option  {{ ($objective->role == 'UI Engineer') ? 'selected' : '' }}  value="UI Engineer">UI Engineer</option>
                                                    <option  {{ ($objective->role == 'Product Manager') ? 'selected' : '' }}  value="Product Manager">Product Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Division</label>
                                            <div class="col-md-8">
                                                <select name="division" class="form-control">
                                                    <option {{ ($objective->division == 'Tech') ? 'selected' : '' }} value="Tech">Tech</option>
                                                    <option {{ ($objective->division == 'Marketing') ? 'selected' : '' }} value="Marketing">Marketing</option>
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
                                                <input type="text" class="form-control" value="{{ $objective->title }}" name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Personal Objective</label>
                                            <textarea name="personal_objective" class="form-control">{{ $objective->personal_objective }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Key Result</label>
                                            <input type="text" class="form-control" value="{{ json_decode($objective->key_results)[0] }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ json_decode($objective->key_results)[1] }}" name="key_result[]">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ json_decode($objective->key_results)[2] }}" name="key_result[]">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Current Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="{{ $objective->current_score }}" name="current_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Target Score</label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="{{ $objective->target_score }}" name="target_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-5 col-form-label">Date to be achived</label>
                                            <div class="col-md-7">
                                                <input type="text" id="datetime" class="form-control" value="{{ $objective->date_to_be_achived }}" name="date_to_be_achived">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-success">Update Objective</button>
                                <a href="{{ route('objectives.index') }}" class="btn btn-warning">Go back to list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@push('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#datetime').datetimepicker();
    });
</script>
@endpush
