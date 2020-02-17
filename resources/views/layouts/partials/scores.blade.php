<div class="card mb-3">
    <div class="card-body">
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
                            <p><img style="height: 80px; width: 80px;" src="{{ asset('images/Business & Customer Knowledge.jpg') }}" alt=""></p>
                            Business & Customer Knowledge
                        </th>
                        <th>
                            <p><img style="height: 80px; width: 80px;" src="{{ asset('images/Communication.jpg') }}" alt=""></p>
                            Communication
                        </th>
                        <th>
                            <p><img style="height: 80px; width: 80px;" src="{{ asset('images/Innovation.jpg')}}" alt=""></p>
                            Innovation
                        </th>
                        <th>
                            <p><img style="height: 80px; width: 80px;" src="{{ asset('images/Leadership.jpg')}}" alt=""></p>
                            Leadership
                        </th>
                        <th>
                            <p><img style="height: 80px; width: 80px;" src="{{ asset('images/Making Decisions.jpg') }}" alt=""></p>
                            Making Decisions
                        </th>
                        <th>
                            <p><img style="height: 80px; width: 80px;" src="{{ asset('images/Planning And Prioritisation.jpg') }}" alt=""></p>
                            Planning And Prioritisation
                        </th>
                        <th>
                            <p><img style="height: 80px; width: 80px;" src="{{ asset('images/Working Together.jpg') }}" alt=""></p>
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
</div>
