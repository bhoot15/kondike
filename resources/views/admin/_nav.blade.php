<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow rounded">
    <div class="container col-md-12">
        <div class="col-md-2">
            <img class="navbar-brand" src="imgs/logo.png" alt="" href="#">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-md-6 row d-flex">
            {{--@if(Request::is('/'))
            @else
                @include('partials._search')
            @endif--}}
        </div>
        <div class="col-md-4">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{Request::is('/')?"active":""}}"><a class="nav-link" href="/">Hi Admin</a></li>
                    <li class="nav-item {{Request::is('login')?"active":""}}"><a class="nav-link" href="#">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>