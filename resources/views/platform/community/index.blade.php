@extends('layouts.platform')

@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')

    <div class="container">
        <div class="table">

            <div class="sidebar">

                <article class="item clearfix">
                    <header>Nieuw bestand</header>
                    <div>
                        <a href="{{ route("sharing-new") }}">Nieuwe post maken.</a><br>
                        <a href="{{ route("sharing-new") }}">Nieuwe groep maken.</a>
                    </div>
                </article>

                <article class="item clearfix">
                    <header>Zoeken</header>
                    <div class="inner-addon left-addon">
                        <i class="glyphicon glyphicon-search"></i>
                        <input type="text" id="search" name="search" class="form-control filterlistener"
                               placeholder="zoekterm"/>
                    </div>
                </article>

                <article class="item">
                    <header>Groepen filteren</header>
                    <div class="padding">
                        <div class="form-group clearfix">
                            <div class="selectdiv">
                                <label for="fos">Populariteit</label>
                                <select id="fos" name="fos" class="select col-xs-12 filterlistener">
                                    <option value="-1" selected>Geen selectie</option>

                                </select>
                            </div>
                        </div>
                        <label>Type groep</label>
                        <br>

                        <div class="form-group clearfix">

                            <label class="checkbox-container col-xs-12">Studentenraad
                                <input type="checkbox" name="pubyear[]" value="1"
                                       class="filterlistener" checked>
                                <span class="checkmark"></span>
                            </label>

                            <label class="checkbox-container col-xs-12">Interesse groep
                                <input type="checkbox" name="pubyear[]" value="1"
                                       class="filterlistener">
                                <span class="checkmark"></span>
                            </label>

                        </div>
                        <input type="hidden" class="filterlistener" name="_token" id="token" value="{{ csrf_token() }}">
                    </div>
                </article>


                <article class="item">
                    <header>Mijn posts</header>
                    <ul class="highlight">


                    </ul>
                </article>

                <article class="item">
                    <header>Statistieken</header>
                    <ul class="highlight">


                    </ul>
                </article>
            </div>

            <div class="content">
                <div id="groupcontainer" class="groups">

                    <div class="group-type clearfix">
                        <header>Studentenraad<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Enigma TD</h4>
                                        <div class="row icons">
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <h6>Trends over web development</h6>
                                        <h6>Arno, donderdag om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Enigma TD</h4>
                                        <div class="row icons">
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <h6>Trends over web development</h6>
                                        <h6>Arno, donderdag om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>


                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Enigma TD</h4>
                                        <div class="row icons">
                                            <div class="col-lg-2">
                                                <i class="fa fa-comment"><span>22</span></i>
                                            </div>
                                            <div class="col-lg-2">
                                                <i class="fa fa-thumbs-up"><span>22</span></i>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <h6>Trends over web development</h6>
                                        <h6>Arno, donderdag om 14:33</h6>
                                    </div>
                                </div>
                            </div>

                        </article>


                    </div>


                    <div class="group-type clearfix">
                        <header>Interesse groepen<a href=""><i class="fa fa-angle-up"></i></a>
                        </header>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Web development</h4>
                                        <i class="fa fa-comment"></i> 44 <i class="fa fa-thumbs-up"></i> 22
                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <h6>Trends over web development</h6>
                                        <h6>Arno</h6>
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Web development</h4>
                                        <i class="fa fa-comment"></i> 44 <i class="fa fa-thumbs-up"></i> 22
                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <h6>Trends over web development</h6>
                                        <h6>Arno</h6>
                                    </div>
                                </div>
                            </div>

                        </article>


                        <article class="group">
                            <div class="padding">
                                <div class="row flex">
                                    <div class="col-lg-1">
                                        <img src="{{asset('img/logo/favicon.png')}} " style="width: 36px; height: 36px">
                                    </div>

                                    <div class="col-lg-5">
                                        <h4>Web development</h4>
                                        <i class="fa fa-comment"></i> 44 <i class="fa fa-thumbs-up"></i> 22
                                    </div>
                                    <div class="col-lg-6" style="text-align: right">
                                        <h6>Trends over web development</h6>
                                        <h6>Arno</h6>
                                    </div>
                                </div>
                            </div>

                        </article>


                    </div>


                </div>


            </div>

        </div>
    </div>


    @include('partials.footer')
@endsection

@section("scripts")
    <script src="{{ asset("js/sharing-filter.js") }}"></script>
@endsection
