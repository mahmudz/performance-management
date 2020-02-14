@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Submitted By</th>
                    <th>Submitted At</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @foreach($objectives as $assigned)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $assigned->objective->title }}</td>
                        <td>{{ $assigned->user->name }}</td>
                        <td>{{ $assigned->updated_at->format('Y-m-d') }}</td>
                        <td><span class="badge badge-dark">{{ ['Pending', 'Approved', 'Declined', 'Submitted'][$assigned->status] }}</span></td>
                        <td>
                            <a href="{{ route('objectives.view-submission', $assigned->id) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-check"></i>
                                View
                            </a>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
