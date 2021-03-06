@extends('layouts.website')
@section('pagetitle', 'Een studentenplatform om U tegen te zeggen.')
@section('content')

<!-- header -->
@include('partials.website.header')
<!-- end header -->

<!-- page banner -->
<section id="page-banner" class="col-xs-12">
    <div class="overlay"></div>
    <section id="welcome" class="col-xs-12 no-padding">
        <div class="container">
            <div class="col-lg-6 col-md-8 col-xs-12 no-padding">
                <h1>Welkom bij UniHelp voor studenten</h1>
                <p>UniHelp is een geheel nieuw en gratis <a href="{{ route('website-how')}}"> platform</a> om
                    studenten te helpen bij hun studies.</p>
                <div class="buttons col-lg-8 col-md-10 col-sm-10 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <a href="{{ route('register')}}">
                                <button type="button" class="action-button left register col-xs-12">
                                    Registreren
                                </button>
                            </a>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <a href="{{ route('login')}}">
                                <button type="button" class="action-button right login col-xs-12">
                                    Inloggen
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- end page banner -->

<!-- features -->
<section id="features" class="padding clearfix col-xs-12">
    <div class="container no-padding">
        <a href="{{route('website-how')}}">
            <div class="col-md-4 col-xs-12">
                <section class="feature no-padding col-xs-12">
                    <div class="overlay clearfix">
                    </div>
                    <img src="img/features/1.jpg" alt="Tutoring">
                    <p>Tutoring</p>
                    <h3>Vind een geschikte <br> tutor.</h3>
                    <a class="meer" href="{{route('website-how')}}">Ga van start</a>
                </section>
            </div>
        </a>
        <a href="{{route('website-how')}}">
            <div class="col-md-4 col-xs-12">
                <section class="feature no-padding col-xs-12">
                    <div class="overlay clearfix">
                    </div>
                    <img src="img/features/5.jpg" alt="Bestanden delen">
                    <p>Bestanden delen</p>
                    <h3>Download de perfecte <br> samenvattingen.</h3>
                    <a class="meer" href="{{route('website-how')}}">Ga van start</a>
                </section>
            </div>
        </a>
        <a href="{{route('website-how')}}">
            <div class="col-md-4 col-xs-12">
                <section class="feature no-padding col-xs-12">
                    <div class="overlay clearfix">
                    </div>
                    <img src="img/features/4.jpg" alt="Community">
                    <p>Community</p>
                    <h3>Blijf altijd op de<br> hoogte.</h3>
                    <a class="meer" href="{{route('website-how')}}">Ga van start</a>
                </section>
            </div>
        </a>
    </div>
    <section class="promo">
        <h2>Bezoek nu ons platform en maak als student gebruik van alle <strong>gratis functionaliteiten.</strong></h2>
    </section>
</section>
<!-- end features -->

<!-- call to action -->
@include('partials.website.call-to-action')
<!-- end call to action -->

<!-- newsletter -->
@include('partials.website.newsletter')
<!-- end newsletter -->

<!-- footer -->
@include('partials.footer')
<!-- end footer -->
@endsection