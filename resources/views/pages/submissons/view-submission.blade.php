@extends('layouts.app')
@section('content')
<form action="{{ route('objectives.approve', $submission->id) }}" method="POST">
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                        <div class="col-md-10 mx-auto pool-objective">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-6">{{ $submission->objective->category->name }}</div>
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
                                                    <input type="text" class="form-control disabled" readonly disabled value="{{ $submission->user->id }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=""  class="col-md-4 col-form-label">Name</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control disabled" readonly disabled value="{{ $submission->name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group row">
                                                <label for=""  class="col-md-4 col-form-label">Role</label>
                                                <div class="col-md-8">
                                                    <select class="form-control disabled" readonly disabled>
                                                        <option {{ $submission->role == 'Software Engineer' ? 'selected' : '' }} value="Software Engineer">Software Engineer</option>
                                                        <option {{ $submission->role == 'UI Engineer' ? 'selected' : '' }} value="UI Engineer">UI Engineer</option>
                                                        <option {{ $submission->role == 'Product Manager' ? 'selected' : '' }} value="Product Manager">Product Manager</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=""  class="col-md-4 col-form-label">Division</label>
                                                <div class="col-md-8">
                                                    <select class="form-control disabled" disabled readonly >
                                                        <option {{ $submission->division == 'Tech' ? 'selected' : '' }} value="Tech">Tech</option>
                                                        <option {{ $submission->division == 'Tech' ? 'selected' : '' }} value="Marketing">Marketing</option>
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
                                                    <input type="text" class="form-control disabled" disabled readonly value="{{ $submission->objective->title }}" name="title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="">Personal Objective</label>
                                                <textarea disabled readonly class="form-control disabled">{{ $submission->objective->personal_objective }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Key Result</label>
                                                <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($submission->objective->key_results)[0] }}" name="key_result[]">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($submission->objective->key_results)[1] }}" name="key_result[]">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($submission->objective->key_results)[2] }}" name="key_result[]">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <br>
                                            <div class="form-group row">
                                                <label for=""  class="col-md-4 col-form-label">Target Score</label>
                                                <div class="col-md-8">
                                                    <input type="number" min="1" max="5" step="0.1" readonly disabled class="form-control disabled" value="{{ $submission->objective->target_score }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=""  class="col-md-4 col-form-label">Expected Score</label>
                                                <div class="col-md-8">
                                                    <input type="number" min="1" max="5" step="0.1" class="form-control" value="{{ $submission->achived_score }}" placeholder="Enter the socre for the submission" name="achived_score">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for=""  class="col-md-4 col-form-label">Evidence</label>
                                                <div class="col-md-8">
                                                    <a href="{{ asset($submission->evidence) }}">{{ $submission->evidence }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fa fa-check"></i>
                                        Approve
                                    </button>
                                    <a href="{{ route('objectives.deny', $submission->id) }}" class="btn btn-danger btn-sm">
                                        <i class="fa fa-check"></i>
                                        Deny
                                    </a>
                                    <a href="{{ route('submissons') }}" class="btn btn-warning">Go back to list</a>
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
