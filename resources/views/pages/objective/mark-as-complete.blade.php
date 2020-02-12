@extends('layouts.app')
@section('content')
<form action="{{ route('objectives.complete', $objective->id) }}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ Session::token() }}">
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
                                                <input type="text" name="colleague_number" class="form-control" value="{{ auth()->id() }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Name</label>
                                            <div class="col-md-8">
                                                <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Role</label>
                                            <div class="col-md-8">
                                                <select name="role" class="form-control">
                                                    <option value="Software Engineer">Software Engineer</option>
                                                    <option value="UI Engineer">UI Engineer</option>
                                                    <option value="Product Manager">Product Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Division</label>
                                            <div class="col-md-8">
                                                <select name="division" class="form-control">
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
                                                <input type="text" class="form-control disabled" disabled readonly value="{{ $objective->title }}" name="title">
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
                                            <label for=""  class="col-md-4 col-form-label">Target Score</label>
                                            <div class="col-md-8">
                                                <input type="number" min="1" max="5" step="0.1" readonly disabled class="form-control disabled" value="{{ $objective->target_score }}" name="target_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Expected Score</label>
                                            <div class="col-md-8">
                                                <input type="number" min="1" max="5" step="0.1" class="form-control" value="{{ $objective->current_score }}" name="current_score">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Add evidence</label>
                                            <div class="col-md-8">
                                                <input type="file" name="evidence">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-success">Submit For Approval</button>
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
