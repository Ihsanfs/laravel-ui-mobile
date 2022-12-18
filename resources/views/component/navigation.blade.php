<div class="container"></div>
<nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon align-left"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"> Login </a>
            </li> --}}


            </ul>

        </div>
        <ul class="navbar-nav">
            @if (Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="#scrollspyHeading3">Settings</a></li> --}}
                        <li><a class="dropdown-item" href="user">User List</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
            this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </li>

                </li>
        </ul>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">
                Register
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
                Login
            </a>
            @endif
            </ul>
    </div>


</nav>

</div>

