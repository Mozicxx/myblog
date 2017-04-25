@extends ('layouts.master')

@section('nav')
<nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
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
              <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
              <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>
          </ul>
      </div>        
      <!-- End Atribute Navigation -->

      <!-- Start Header Navigation -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="#brand">

              <img src="/images/logo.png" class="logo logo-display m-top-10" alt="">
              <img src="/images/logo.jpg" class="logo logo-scrolled" alt="">

          </a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
              <li><a href="#hello">Hello</a></li>                    
              <li><a href="#ability">Ability</a></li>                
              <li><a href="#contact">Contact</a></li>                     
              <li><a href="/posts">Blog</a></li>       
          </ul>
      </div><!-- /.navbar-collapse -->
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
                <li><a href="/posts">Blog</a></li>
                <li><a href="/messages">Messages</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="/#contact">Contact</a></li>
			</ul>
		</div>
  </div>
  <!-- End Side Menu -->

</nav>
@stop

@section('preloader')
<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>
<!--End off Preloader -->
@stop

@section('home')<!-- Preloader -->
<section id="hello" class="home bg-mega">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="main_home">
                <div class="home_text">
                    <h1 class="text-white">WE’RE <br /> CREATIVE DESIGNERS!</h1>
                </div>

                <div class="home_btns m-top-40">
                    <a href="" class="btn btn-primary m-top-20">GET STARTED</a>
                    <a href="" class="btn btn-default m-top-20">DOWNLOAD NOW</a>
                </div>

            </div>
        </div><!--End off row-->
    </div><!--End off container -->
</section> <!--End off Home Sections-->

            <!--Skill Sections-->
<section id="ability" class="skill roomy-100">
    <div class="container">
        <div class="row">
            <div class="main_skill">
                <div class="col-md-6">
                    <div class="skill_content wow fadeIn">
                        <h2>Our skill</h2>
                        <div class="separator_left"></div>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
                            quis nostrud exerci tation ullamcorper suscipit lobortis 
                            nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                            sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            Ut wisi enim ad minim veniam, quis nostrud exerci tation 
                            ullamcorper suscipit lobortis nisl ut aliquip 
                            ex ea commodo consequat. </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill_bar sm-m-top-50">    
                        <div class="teamskillbar clearfix m-top-20" data-percent="80%">
                            <h6>GRAPHIC DESIGN</h6>
                            <div class="teamskillbar-bar"></div>
                        </div> <!-- End Skill Bar -->

                        <div class="teamskillbar clearfix m-top-50" data-percent="75%">
                            <h6>TYPOGRAPHY</h6>
                            <div class="teamskillbar-bar"></div>
                        </div> <!-- End Skill Bar -->

                        <div class="teamskillbar clearfix m-top-50" data-percent="90%">
                            <h6>HTML / CSS</h6>
                            <div class="teamskillbar-bar"></div>
                        </div> <!-- End Skill Bar -->
                    </div>
                </div>
            </div>
        </div><!--End off row-->
    </div><!--End off container -->
    <br />
    <br />
    <hr />
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="skill_bottom_content text-center">
                <div class="col-md-3">
                    <div class="skill_bottom_item">
                        <h2 class="statistic-counter">3468</h2>
                        <div class="separator_small"></div>
                        <h5><em>Projects Finished</em></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill_bottom_item">
                        <h2 class="statistic-counter">4638</h2>
                        <div class="separator_small"></div>
                        <h5><em>Happy Clients</em></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill_bottom_item">
                        <h2 class="statistic-counter">3468</h2>
                        <div class="separator_small"></div>
                        <h5><em>Hours of work</em></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="skill_bottom_item">
                        <h2 class="statistic-counter">3468</h2>
                        <div class="separator_small"></div>
                        <h5><em>Cup of coffee</em></h5>
                    </div>
                </div>
            </div>
        </div><!--End off row-->
    </div><!--End off container -->
</section> <!--End off Skill section -->

<!--Contact Us Section-->
<section id="contact" class="contact bg-mega fix">
    <div class="container">
        <div class="row">
            <div class="main_contact roomy-50 text-white">
                    <div class="rage_widget">
                        <div class="widget_head">
                            <h3 class="text-white">Find me</h3>
                            <div class="separator_small"></div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                            ut aliquip ex ea commodo consequat. </p>

                        <div class="widget_socail m-top-30">
                            <ul class="list-inline">
                                <li>
                                  <a href="http://wpa.qq.com/msgrd?v=3&uin=550792980&site=qq&menu=yes" target="_blank">
                                    <i class="fa fa-qq"></i>
                                  </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wechat"></i></a>
                                    <ul class="dropdown-menu" style="position: absolute;top: 0;left:9px;opacity:0.8;">
                                        <li>
                                            <a href="#" class="photo"><img src="/images/WeChat.png" class="" alt="" /></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="https://www.facebook.com/Mozicxx" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Mozicxx" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/mozicxx" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://github.com/Mozicxx" target="_blank"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div><!--End off row -->
    </div><!--End off container -->
</section><!--End off Contact Section-->

<!--Maps Section-->
<div class="main_maps text-center fix">
    <div class="overlay"></div>
    <div class="maps_text">
        <h3 class="text-white" onclick="showmap()">FIND US ON THE MAP <i class="fa fa-angle-down"></i></h3>
        <div id="map_canvas" class="mapheight"></div>
    </div>
</div>
<!-- End off Maps Section-->


@stop

@section('contents')

@stop

@section ('individualjs')
<script type="text/javascript">
  $(function(){
    $('nav').addClass('no-background');
    $(document).scroll(function(){ 
      if ($(this).scrollTop() > 50) {
        $('nav').removeClass('no-background');
      } else {
        $('nav').addClass('no-background');
      }
    });

  });
</script>
@stop