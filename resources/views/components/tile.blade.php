@php $id = uniqid(); @endphp
<div class="row" id="objective{{ $id }}">
    <div class="col-md-10 mx-auto pool-objective my-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">Leadership</div>
                    <div class="col-6 text-right">
                        <button class="btn btn-sm btn-success addToList" data-id="{{ $id }}">
                            <i class="fa fa-plus"></i>
                            Add to list
                        </button>
                        <button class="btn btn-sm btn-info" data-toggle="collapse" data-target="#collapse{{ $id }}" aria-expanded="false" aria-controls="collapse{{ $id }}">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body" id="collapse{{ $id }}">
                <div class="row">
                    <div class="col-2">
                        <img src="https://picsum.photos/120/100" class="img-thumbnail">
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="" >Title</label>
                            <input type="text" class="form-control" name="title">
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
                                <input type="text" class="form-control" name="date_to_be_achived" id="datetimepicker5" data-toggle="datetimepicker" data-target="#datetimepicker5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
