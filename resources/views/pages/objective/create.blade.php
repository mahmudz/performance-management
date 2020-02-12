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
                                    <div class="col-6">Create new objective</div>
                                    <div class="col-6 text-right"></div>
                                </div>
                            </div>
                            <div class="card-body">
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


@push('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#date_to_be_achived').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd'
        });
    });
</script>
@endpush

