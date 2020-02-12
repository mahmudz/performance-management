<nav id="sidebar">
    <div class="sidebar-header">
        <h3>{{ auth()->user()->name }}</h3>
    </div>
    <ul class="list-unstyled components">
        <p>Navigations</p>
        <hr>
        @if(Auth::user()->type == 1)
            <li><a href="{{ route('objectives.index') }}">Preset Objectives</a></li>
        @endif
        @if(Auth::user()->type == 2)
            <li><a href="{{ route('submissons') }}">Submissions</a></li>
        @endif
        @if(Auth::user()->type == 3)
            <li><a href="{{ route('home') }}">Objective Pool</a></li>
            <li><a href="{{ route('my-objectives') }}">My Objectives</a></li>
            <li><a href="{{ route('objectives.create') }}">Create Objective</a></li>
        @endif

        <hr>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</nav>
