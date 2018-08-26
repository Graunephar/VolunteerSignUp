<nav class="navbar navbar-expand-sm navbar-static-top navbar-default navbar-inverse bg-dark" style="width: 100vw">


    <a class="navbar-brand" href="/">VolunteerSignUp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class=" nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class=" nav-item {{ Request::is('overview') ? 'active' : '' }}">
                <a class="nav-linkn" href="/overview">Overview</a>
            </li>
            <li class=" nav-item {{ Request::is('volunteerlist') ? 'active' : '' }}">
                <a class="nav-link" href="/volunteerlist">Volunteer List</a>
            </li>


        </ul>
    </div>
</nav>
