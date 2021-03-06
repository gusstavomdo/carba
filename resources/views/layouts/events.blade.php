@extends('layouts.app')

@section('title', 'Eventos')

@section('content')     
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">   
        <div class="overlay overlay-bg"></div>
        <div class="container">             
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Eventos 2019             
                    </h1>   
                    <p class="text-white link-nav"><a href="{{ url('/') }}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Eventos</a></p>
                </div>  
            </div>
        </div>
    </section>
    <!-- End banner Area -->    
        
    <!-- Start events-list Area -->
    <section class="events-list-area section-gap event-page-lists">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>05 de Mayo, 2019</p>
                            <a href="{{ url('/event-details') }}"><h4>Demostración de artes</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit impedit, quam maxime? Numquam architecto rem reiciendis neque amet facere asperiores sed adipisci iusto, sint dignissimos, eveniet voluptates voluptatibus! Porro, rem?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>10 de Marzo, 2019</p>
                            <a href="{{ url('/event-details') }}"><h4>Ejercicio de Elocución</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima ut maxime incidunt magni dolore quae at quia consequatur vel animi! Perspiciatis necessitatibus rem itaque corrupti, in aperiam animi aut odit?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>18 de Diciembre, 2018</p>
                            <a href="{{ url('/event-details') }}"><h4>Festival Navideño</h4></a>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni illum dolores officia numquam fugit debitis earum cumque incidunt explicabo eum, eveniet quia aliquam provident illo tenetur deleniti. Ipsum, ratione, eveniet.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>02 de Noviembre, 2018</p>
                            <a href="{{ url('/event-details') }}"><h4>Halloween</h4></a>
                            <p>
                                El día de muertos una tradición que merece ser respalda Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam provident quas illum tempore voluptatem libero fugiat dolor officia ab, nihil quam molestias, sed maxime architecto ipsum iusto repellendus aliquid! Ut?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="{{ url('/event-details') }}"><h4>The Universe Through
                            A Child S Eyes</h4></a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" pb-30>
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="{{ url('/event-details') }}"><h4>The Universe Through
                            A Child S Eyes</h4></a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pb-30">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e1.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="{{ url('/event-details') }}"><h4>The Universe Through
                            A Child S Eyes</h4></a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="img/e2.jpg" alt="">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>25th February, 2018</p>
                            <a href="#"><h4>The Universe Through
                            A Child S Eyes</h4></a>
                            <p>
                                For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
                            </p>
                        </div>
                    </div>
                </div>                                                                      
                <a href="#" class="text-uppercase primary-btn mx-auto mt-40">Cargar más eventos</a>
            </div>
        </div>  
    </section>
    <!-- End events-list Area -->
    
    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Not Yet Satisfied with our Trend?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="#">view our blog</a>
                </div>
            </div>
        </div>  
    </section>
    <!-- End cta-two Area -->
@endsection