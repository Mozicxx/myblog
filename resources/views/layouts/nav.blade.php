<nav class="navbar navbar-default no-background bootsnav">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <div class="container">    
        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <ul>
                <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
            </ul>
        </div>        
        <!-- End Atribute Navigation -->

    </div>  


    <!-- Start Side Menu -->
  <div class="side">
        <a href="#" class="close-side"><i class="fa fa-times"></i></a>
        <div class="widget ">

            @if (auth()->check())
            <div class="text-center dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ \App\Helpers\Common::getGravatar(auth()->user()->email,100) }}" class="img-circle" width="100" height="100">
                    <h5 class="text-center text-white">{{ auth()->user()->name }}<i class="fa fa-angle-down"></i></h5>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/profile">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </div>
            @else
            <br>
            <div class="row text-center">
                <a class="btn btn-info " href="/login">Come Back</a>
            </div>
            <div class="row text-center m-top-20">
                <a class="btn btn-outline-success" href="/register">Sign Up</a>
            </div>
            @endif
                <br >
            <h6 class="title">Custom Pages</h6>
            <ul class="link">
                <li><a href="/">Home</a></li>
                <li><a href="/posts">Blog</a></li>
                <li><a href="/messages">Messages</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="/#contact">Contact</a></li>
            </ul>
        </div>
  </div>
    <!-- End Side Menu -->

</nav>