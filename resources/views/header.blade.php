<nav class="navbar navbar-dark bg-dark" >
    <div class="navbar-all">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="/">Technimals</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if(Session::has('user'))
                    <li class="active"><a  href="/blog">Blog</a></li>
                    <li><a href="/facts">Facts</a></li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" style="color: black; font-size:12pt" href="/mission">Mission</a></li>
                            <li><a class="dropdown-item"  style="color: black; font-size:12pt" href="/aboutus">About us</a></li>
                        </ul>
                    </li>

                @if(Session::has('user'))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Session::get('user')['name']}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" style="color: black; font-size:12pt" href="/logout">Logout</a></li>
                    </ul>
                </li>
                    <li><a href="/contactus">Contact us</a></li>
                @else
                    <li><a href="/register">Register</a></li>
                    <li><a href="/login">Login</a></li>
                @endif

            </ul>
            <form action="/search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

    </div>
</nav>
