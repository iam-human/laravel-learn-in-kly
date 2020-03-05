<nav class="navbar probootstrap-megamenu navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            {{-- <a class="navbar-brand" href="{{url('/')}}" title="uiCookies:Inspire">Inspire</a> --}}
            <h1>Title</h1>
        </div>
        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('news')}}">News</a></li>
            {{-- <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
            <ul class="dropdown-menu">
            <li><a href="about.html">About Us</a></li>
            <li><a href="team.html">Team</a></li>
            <li class="dropdown-submenu dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
            <ul class="dropdown-menu">
            <li><a href="#">Second Level Menu</a></li>
            <li><a href="#">Second Level Menu</a></li>
            <li><a href="#">Second Level Menu</a></li>
            <li><a href="#">Second Level Menu</a></li>
            </ul>
            </li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="pricing.html">Pricing</a></li> --}}
            {{-- </ul>
            </li> --}}
            <li><a href="{{url('about')}}">About</a></li>
            <li class="probootstra-cta-button"><a href="#" class="btn" data-toggle="modal" data-target="#loginModal">Log in</a></li>
            <li class="probootstra-cta-button last"><a href="#" class="btn btn-ghost" data-toggle="modal" data-target="#signupModal">Sign up</a></li>
            </ul>
        </div>
    </div>
</nav>