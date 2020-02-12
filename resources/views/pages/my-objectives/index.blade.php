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
                    <th>Actions</th>
                </tr>
                @foreach($objectives as $assigned)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $assigned->objective->title }}</td>
                        <td><span class="badge badge-dark">{{ ['Penting', 'Approved', 'Declined'][$assigned->status] }}</span></td>
                        <td>
                            <a href="{{ route('objectives.complete', $assigned->objective->id) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-check"></i>
                                Mark as complete
                            </a>
                            <a href="{{ route('objectives.show', $assigned->objective->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('objectives.edit', $assigned->objective->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('objectives.delete', $assigned->objective->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
