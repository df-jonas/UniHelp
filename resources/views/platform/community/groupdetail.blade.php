@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <!-- begin container -->
    <div class="container">
        <!-- begin table -->
        <div class="table">

            <!-- sidebar -->
            <div class="sidebar">
                <!-- Upload button -->
                <article class="item button">
                    <a href="#">
                        <button>
                            <i class="glyphicon glyphicon-plus-sign"></i> Nieuwe post
                        </button>
                    </a>


                </article>
                <!-- end Upload button -->

                <!-- Search form -->
                <article class="item search">
                    <header>Zoeken</header>
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-search"></i>
                        <input type="text" id="search" name="search" class="form-control filterlistener"
                               placeholder="zoekterm"/>
                    </div>
                </article>
                <!-- end Search form -->


                <!-- User items -->
                <article class="item user-owned">
                    <header>Mijn posts</header>


                    <div class="padding">


                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Teveel springuren</a></h5>
                                <div class="rating">


                                    <p>test</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>


                            </div>

                        </div>

                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Teveel springuren</a></h5>
                                <div class="rating">


                                    <p>test</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>


                            </div>

                        </div>

                        <div class="row flex">
                            <div class="icon col-md-2 col-xs-2">
                                <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                            </div>


                            <div class="col-md-8 col-xs-8">
                                <h5><a href="#">Teveel springuren</a></h5>
                                <div class="rating">


                                    <p>test</p>


                                </div>

                            </div>

                            <div class="col-md-2 col-xs-2">
                                <i class="fa fa-pencil brown"></i>


                            </div>

                        </div>

                    </div>


                </article>
                <!-- end User items -->

                <!-- Community stats -->
                <article class="item stats">
                    <header>Statistieken</header>
                    <div class="padding">
                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Groepen</p>
                            </div>

                            <div class="col-xs-2">
                                <p>23</p>
                            </div>
                        </div>

                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Posts</p>
                            </div>

                            <div class="col-xs-2">
                                <p>23</p>
                            </div>
                        </div>

                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal reacties</p>
                            </div>

                            <div class="col-xs-2">
                                <p>23</p>
                            </div>
                        </div>


                        <div class="row flex">
                            <div class="col-xs-10">
                                <p>Aantal gebruikers</p>
                            </div>

                            <div class="col-xs-2">
                                <p>23</p>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- end Community stats -->
            </div>
            <!--end sidebar -->

            <!-- content section -->
            <div class="content">
                <div id="groupcontainer" class="item groups">

                    <div class="group-type clearfix">
                        <header>Posts in klachten<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4>Teveel springuren</h4>
                                        <div class="row icons">

                                            <div class="col-lg-2 col-xs-3">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2 col-xs-3">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>



                                        </div>

                                    </div>
                                    <div class="info col-lg-6 col-xs-12" style="text-align: right">
                                        <h6>16 februari 2018</h6>
                                        <h6>door <span>Arno Stalpaert</span></h6>
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1 col-xs-2">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group_img">
                                    </div>

                                    <div class="col-lg-5 col-xs-10">
                                        <h4>Microgolf kapot</h4>
                                        <div class="row icons">

                                            <div class="col-lg-2 col-xs-3">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2 col-xs-3">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>



                                        </div>

                                    </div>
                                    <div class="info col-lg-6 col-xs-12" style="text-align: right">
                                        <h6>16 februari 2018</h6>
                                        <h6>door <span>Arno Stalpaert</span></h6>
                                    </div>
                                </div>
                            </div>

                        </article>


                    </div>





                </div>


            </div>
            <!-- end content section -->

            <!-- end table -->
        </div>
    </div>
    <!-- end container -->


    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
