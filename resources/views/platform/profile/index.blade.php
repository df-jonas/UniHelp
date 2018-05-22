@extends('layouts.platform')

@section('pagetitle', 'Profiel')
@section('content')
@include('partials.platform.header')
@include('partials.platform.subheader')
<!-- begin container -->
<section class="container profile">
    <!-- begin profile message -->
@include('partials.platform.message')
<!-- end profile message -->


    <!-- begin profile info -->
    <div class="row">
        <!-- picture -->
        <section class="col-xs-12">
            <div class="item padding clearfix">
                <section class="headline">
                    <div class="row flex">
                        <section class="left col-lg-1 col-sm-2 col-xs-12">
                            <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img" alt="User profile image">
                            <br>
                        </section>
                        <section class="right col-lg-11 col-sm-10 col-xs-12">
                            <h4 class="user-title">{{ $user->first_name. " " .$user->last_name }}</h4>
                            <h4 style="margin-top: 0">
                                <small>{{ $email }}</small>
                            </h4>
                        </section>
                    </div>
                    <br>
                </section>
                <section>
                    <h2>Profiel tijdlijn</h2>
                </section>
            </div>
        </section>
        <!-- end picture -->
    </div>
    <!-- end profile info -->

</section>
<!-- end container -->
<!-- begin footer -->
@include('partials.footer')
<!-- end footer -->
@endsection

@section("scripts")
    <script src="{{ asset("js/course-filter.js") }}"></script>
@endsection
