
<div class="header">
    <div class="logo">
        <img src="{{ URL::asset('/images/logo.png') }}" alt="" >
    </div>
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{ route("home") }}">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("create") }}">Create</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route("list") }}">View</a>
                    </li>
                </ul>
            </div>
          </nav>
    </div>
</div>



