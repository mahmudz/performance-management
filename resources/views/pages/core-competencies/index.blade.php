@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <img src="https://picsum.photos/800/150" class="img-thumbnail mt-3">
        </div>
        <div class="col-md-2 text-center">
            <a href="{{ route('logout') }}" class="btn btn-success mt-5 mb-4">Logout</a>
        </div>
        <div class="col-md-5">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr>
                    <th>ID</th>
                    <td>{{ auth()->id() }}</td>
                </tr>
                <tr>
                    <th>My Current Role</th>
                    <td>Current Role Goes Here</td>
                </tr>
                <tr>
                    <th>Next Steps</th>
                    <td>Next Step Goes Here</td>
                </tr>
            </table>
        </div>

        <div class="col-md-12">
            <table class="table table-hover" id="results-table">
                <tr>
                    <th></th>
                    <th>
                        <h1><i class="fa fa-brain"></i></h1>
                        Business & Customer Knowledge
                    </th>
                    <th>
                        <h1><i class="fa fa-comments"></i></h1>
                        Communication
                    </th>
                    <th>
                        <h1><i class="fa fa-lightbulb"></i></h1>
                        Innovation
                    </th>
                    <th>
                        <h1><i class="fa fa-user-shield"></i></h1>
                        Leadership
                    </th>
                    <th>
                        <h1><i class="fa fa-calendar-check"></i></h1>
                        Making Decisions
                    </th>
                    <th>
                        <h1><i class="fa fa-stream"></i></h1>
                        Planning and prioritisation
                    </th>
                    <th>
                        <h1><i class="fa fa-cogs"></i></h1>
                        Working Together
                    </th>
                </tr>
                <tr>
                    <td>Target</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Score</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Stars</td>
                    <td>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </td>

                    <td>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </td>

                    <td>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </td>

                    <td>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </td>

                    <td>
                        <i class="fas fa-star"></i>
                    </td>

                    <td>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </td>

                    <td>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </td>

                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    #results-table th {
        text-align: center;
    }
    #results-table td {
        text-align: center;
    }
</style>
@endpush
