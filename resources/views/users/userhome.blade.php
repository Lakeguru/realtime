@extends('layouts.welcome')

@section('content')
    <h1>Welcome</h1>

    <div class="contanier">


        @include('users.usernavbar')
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">

        <!-- Swiper Silder
            ================================================== -->
        <!-- Slider main container -->
        <div class="swiper-container main-slider" id="myCarousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider-bg-position" style="background:url('http://grafreez.com/wp-content/temp_demos/burnout/img/1.jpg')" data-hash="slide1">
                    <h2>Integrity without knowledge is weak and useless, and knowledge without integrity is danger and dreadful</h2>
                </div>
                <div class="swiper-slide slider-bg-position"  style="background:url('http://grafreez.com/wp-content/temp_demos/burnout/img/3.jpg')" data-hash="slide2">
                    <h2>Happiness is nothing more than good understanding to Education</h2>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
            <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
        </div>

        <!-- Benefits
            ================================================== -->
        <section class="service-sec" id="benefits">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2><small>Benefits of MBM</small>To enjoy the glow of good Calculation In your Courses </h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-plus" aria-hidden="true"></i>
                                <h3>Better Sleep</h3>
                                <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                            </div>
                            <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-leaf" aria-hidden="true"></i>
                                <h3>Reduces Weight</h3>
                                <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                            </div>
                            <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-leaf" aria-hidden="true"></i>
                                <h3>Improves Mood</h3>
                                <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                            </div>
                            <div class="col-md-6 text-sm-center service-block"> <i class="fa fa-bell" aria-hidden="true"></i>
                                <h3>Boosts Energy</h3>
                                <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"> <img src="http://grafreez.com/wp-content/temp_demos/burnout/img/side-01.jpg" style="height="200px; width="200px";class="img-fluid" /> </div>
                </div>
                <!-- /.row -->
            </div>
        </section>

        <!-- About
            ================================================== -->
        <section class="about-sec parallax-section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2><small>Who We Are</small>About<br>
                            Metro</h2>
                    </div>
                    <div class="col-md-4">
                        <p>              Metrobasicmaths.com is a website operated since 2013 to by Lmnetro unity to provide/detailed solution to basic computations.
                            The website was designed to enhance communication between the user and the provider of service. The website does not encourage or support examination malpractices therefore user of this website is advised Not print out  from this website is advised to be lower to test/examination center. The service of this website is build worked on by group of undergraduates, teachers who had years of teaching experience in various set-ups as part of research exposure.</p>
                        <p>Saving our planet, lifting people out of poverty, advancing economic growth... these are one and the same fight. We must connect the dots between climate change, water scarcity, energy shortages, global health, food security and women's empowerment. Solutions to one problem must be solutions for all.</p>
                    </div>
                    {{--  <div class="col-md-4">
                      <p>Our greatest happiness does not depend on the condition of life in which chance has placed us, but is always the result of a good conscience, good health, occupation, and freedom in all just pursuits.</p>
                      <p>Being in control of your life and having realistic expectations about your day-to-day challenges are the keys to stress management, which is perhaps the most important ingredient to living a happy, healthy and rewarding life.</p>
                      <p><a href="#" class="btn btn-transparent-white btn-capsul">Explore More</a></p>
                    </div>  --}}
                </div>
            </div>
        </section>

        <section class="action-sec">
            <div class="container">
                <div class="action-box text-center"><h2>Click here to Enter your Pin To Post Your Question </h2><a class="btn btn-success" href="/enter" target="_blank">Enter</a></div>
            </div>
        </section>


    </div>

@endsection