@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Score</th>
                    <th>Actions</th>
                </tr>
                @foreach($objectives as $assigned)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $assigned->objective->title }}</td>
                        <td><span class="badge badge-dark">{{ ['Pending', 'Approved', 'Declined', 'Submitted'][$assigned->status] }}</span></td>
                        <td>{{ ($assigned->achived_score == null) ? 'Not available yet' : $assigned->achived_score }}</td>
                        <td>
                            @if($assigned->status == 0)
                                <a href="{{ route('objectives.complete', $assigned->objective->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-check"></i>
                                    Mark as complete
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
