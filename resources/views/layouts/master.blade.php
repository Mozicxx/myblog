<!DOCTYPE doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    @include ('layouts.head')
    <body data-spy="scroll" data-target=".navbar-collapse">
        @yield ('preloader')
        <div class="culmn">
            <!--Home page style-->
            @section('nav')
                @include ('layouts.nav')
            @show

            @include ('layouts.flash')

            @yield ('home')

            @section ('contents')
                <section class="m-top-80" id="blog">
                    <div class="container">
                        <h2>
                            The Bootstrap Blog
                        </h2>
                        <div class="separator_left">
                        </div>
                        <div class="row m-bottom-40">
                            <div class="col-sm-9 blog-main">
                                @yield ('content')
                            </div>
                            <!-- /.blog-main -->
                            @include ('layouts.sidebar')
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <br>
            @show
            <!-- scroll up-->
            <div class="scrollup">
                <a href="#">
                    <i class="fa fa-chevron-up">
                    </i>
                </a>
            </div>
            <!-- End off scroll up -->
            @include ('layouts.footer')
        </div>
        @include ('layouts.js')
        @yield ('individualjs')
    </body>
</html>
