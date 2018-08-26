<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'VolunteerSignUp') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @else

                    <div class="navbar-collapse">

                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" id="#" href="/home">{{ __('Home') }}</a>
                        </li>

                        <li class="nav-item {{ Request::is('overview') ? 'active' : '' }}">
                            <a class="nav-link" id="#" href="/overview">{{ __('Overview') }}</a>
                        </li>

                        <li class="nav-item {{ Request::is('volunteerlist') ? 'active' : '' }}">
                            <a class="nav-link" id="#" href="/volunteerlist">{{ __('Volunteer List') }}</a>
                        </li>
                        <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                            <a class="nav-link" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    </div>

                    <div class="nav-divider"></div>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>
