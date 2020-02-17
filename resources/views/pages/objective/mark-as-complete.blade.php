@extends('layouts.app')
@section('content')
<form action="{{ route('objectives.complete', $assigned->id) }}" method="post" enctype="multipart/form-data">
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
                                        @if($assigned->objective->type == 1)
                                        <img height="90px;" width="90px" src="{{ asset('images/' . $assigned->objective->category->name . '.jpg') }}">
                                        @else
                                        <img src="https://picsum.photos/120/100" alt="">
                                        @endif
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group row">
                                            <label for="" class="col-md-4 col-form-label">Number</label>
                                            <div class="col-md-8">
                                                <input type="text" name="colleague_number disabled" readonly disabled class="form-control" value="{{ auth()->id() }}">
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
                                                <input type="text" class="form-control disabled" disabled readonly value="{{ $assigned->objective->title }}" name="title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Personal Objective</label>
                                            <textarea disabled class="form-control disabled" readonly>{{ $assigned->objective->personal_objective }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Key Result</label>
                                            <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($assigned->objective->key_results)[0] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($assigned->objective->key_results)[1] }}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control disabled" disabled readonly value="{{ json_decode($assigned->objective->key_results)[2] }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <br>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Target Score</label>
                                            <div class="col-md-8">
                                                <input type="number" min="1" max="5" step="0.1" readonly disabled class="form-control disabled" value="{{ $assigned->objective->target_score }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Expected Score</label>
                                            <div class="col-md-8">
                                                <input type="number" min="1" max="5" step="0.1" class="form-control" name="expected_score" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for=""  class="col-md-4 col-form-label">Add evidence</label>
                                            <div class="col-md-8">
                                                <input type="file" name="evidence" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Your comments</label>
                                            <textarea name="comments" class="form-control"></textarea>
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
