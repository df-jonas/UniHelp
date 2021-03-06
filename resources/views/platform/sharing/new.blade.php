@extends('layouts.platform')
@section('pagetitle', 'Nieuw bestand uploaden')
@section('content')
    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <div class="container">
        <!-- table -->
        <div class="table">
            <!-- Sidebar -->
            <aside class="sidebar">
                <section class="item">
                    <header><a class="header-title"><i class="fa fa-info-circle"></i> Informatie</a></header>
                    <div class="padding">
                        <ul class="highlight">
                            <li class="clearfix"><i class="fa fa-university" aria-hidden="true"><span
                                            class="static-campus">{{ $campus }}</span></i></li>
                            <li class="clearfix"><i class="fa fa-graduation-cap" aria-hidden="true"><span
                                            class="static-fos">{{ $fos }}</span></i></li>
                            <li class="clearfix"><i class="fa fa-bar-chart" aria-hidden="true"><span
                                            class="static-course">Vak</span></i></li>
                            <li class="clearfix"><i class="fa fa-align-justify" aria-hidden="true"><span
                                            class="static-type">Type</span></i></li>
                            <li class="clearfix"><i class="fa fa-level-up" aria-hidden="true"><span
                                            class="static-degree">Graad</span></i></li>
                            <li class="clearfix"><i class="fa fa-calendar-check-o" aria-hidden="true"><span
                                            class="static-publicationyear">Jaar</span></i></li>
                            <li class="clearfix"><i class="fa fa-book" aria-hidden="true"><span
                                            class="static-book">Boek</span></i></li>
                        </ul>
                    </div>
                </section>
            </aside>
            <!-- sidebar -->
            <!-- content -->
            <section class="content">
                    <!-- multistep form -->
                    <form id="msform" class="col-xs-12 no-padding clearfix" method="post" enctype="multipart/form-data" action="{{route('sharing-new')}}">
                    {{ csrf_field() }}
                         <!-- progressbar -->
                        <section class="item padding">
                                <ul id="progressbar">
                                    <li data-title="Kies Vak" class="active"></li>
                                    <li data-title="Beschrijving"></li>
                                    <li data-title="Studiemateriaal"></li>
                                    <li data-title="Overzicht"></li>
                                </ul>
                        </section>
                        <!-- progressbar -->

                        <!-- step 1 -->
                        <fieldset>
                            <section class="item">
                                <div class="padding">
                                    <div class="form-group clearfix">
                                        <div class="selectdiv">
                                            <label for="course">Voor welk vak wil je een bestand uploaden?</label>
                                            <select id="course" class="select col-xs-12 form-control" name="course">
                                                @foreach ($courses as $course)
                                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="item clearfix">
                                <div class="padding">
                                    <label>Bestanden uploaden</label>
                                </div>

                                <div class="dropzone clearfix" style="margin-top: 2em">
                                    <input type="file" id="file" name="file" class="inputFile" accept="application/pdf" data-multiple-caption="{count} files selected">
                                    <label for="file" style="text-align: center"><span>Kies een bestand</span></label>
                                    <h5>Sleep bestanden hier</h5>
                                </div>


                                <div class="form-group col-xs-12 padding">
                                    <input type="button" class="download-button next col-lg-2 col-sm-4 col-xs-12" value="Volgende">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 1 -->

                        <!-- step 2 -->
                        <fieldset>
                            <section class="item clearfix">
                                <div class="padding">
                                    <div class="form-group col-xs-12 no-padding clearfix">
                                        <div class="textdiv">
                                            <label for="title">Titel</label>
                                            <input id="title" name="title" type="text" class="form-control col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 no-padding clearfix">
                                        <label for="filedesc">Omschrijving bestand</label>
                                        <textarea class="form-control" rows="5" id="filedesc" name="filedescription"></textarea>
                                    </div>

                                    <div class="form-group col-xs-12 no-padding clearfix">
                                        <div class="selectdiv">
                                            <label for="doctype">Type document</label>
                                            <select id="doctype" name="documenttype" class="form-control select col-xs-12">
                                                @foreach($doctypes as $doctype)
                                                    <option value="{{$doctype->id}}">{{$doctype->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 no-padding clearfix">
                                        <div class="selectdiv">
                                            <label for="degree">Studiejaar</label>
                                            <select id="degree" name="degree" class="form-control select col-xs-12">
                                                @foreach($degrees as $degree)
                                                    <option value="{{$degree->id}}">{{$degree->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 no-padding clearfix">
                                        <div class="selectdiv">
                                            <label for="originaldate">Geschreven in</label>
                                            <select id="originaldate" name="originaldate"
                                                    class="form-control select col-xs-12">
                                                @foreach($pubyears as $pubyear)
                                                    <option value="{{$pubyear->id}}">{{$pubyear->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input type="button" class="download-button next col-lg-2  col-sm-4 col-xs-12" value="Volgende">
                                    <input type="button" class="download-button previous col-lg-2 col-lg-pull-1 col-sm-4 col-sm-pull-1 col-xs-12" value="Vorige">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 2 -->

                        <!-- step 3 -->
                        <fieldset>
                            <section class="item clearfix">
                                <div class="padding">
                                    <div class="form-group col-xs-12 no-padding clearfix">
                                        <div class="selectdiv">
                                            <label for="book">Is er een boek gekoppeld aan dit vak?</label>
                                            <select id="book" name="hasbook" class="select col-xs-12 form-control">
                                                <option value="0" selected>Neen</option>
                                                <option value="1">Ja</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 no-padding clearfix">
                                        <div class="textdiv">
                                            <label for="booktitle">Welk boek?</label>
                                            <input id="booktitle" name="booktitle" type="text" class="form-control" disabled="">
                                        </div>
                                    </div>

                                    <input type="button" class="download-button next col-lg-2  col-sm-4 col-xs-12" value="Volgende">
                                    <input type="button" class="download-button previous col-lg-2 col-lg-pull-1 col-sm-4 col-sm-pull-1  col-xs-12" value="Vorige">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 3 -->

                        <!-- step 4 -->
                        <fieldset>
                            <section class="item file new clearfix">
                                <div class="padding">
                                    <label>Document eigenschappen</label>
                                    <table class="file-overview">
                                        <tr class="spacer" style="height: 2em;">
                                            <td></td>
                                        </tr>
                                        <tr style="margin-bottom: 2em">
                                            <td class="bold">Campus</td>
                                            <td class="static-campus">{{ $campus }}</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Richting</td>
                                            <td class="static-fos">{{ $fos }}</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Vak</td>
                                            <td class="static-course">Project management</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Titel bestand</td>
                                            <td class="static-title">Hoorcollege 1</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Titel boek</td>
                                            <td class="static-book">Onbekend</td>
                                            <td class="small">Bewerken</td>
                                        </tr>
                                        <tr class="spacer">
                                            <td></td>
                                        </tr>
                                    </table>

                                    <input id="submitall" type="submit" name="submit" class="download-button next col-lg-2 col-sm-4 col-xs-12" value="Versturen">
                                    <input type="button" class="download-button previous col-lg-2 col-lg-pull-1 col-sm-4 col-sm-pull-1 col-xs-12" value="Vorige">
                                </div>
                            </section>
                        </fieldset>
                        <!-- step 4 -->
                        <!-- multistep form -->
                    </form>
            </section>
            <!-- content -->
            <!-- table -->
        </div>
        <!-- container -->
    </div>
    @include('partials.footer')
@endsection
@section("scripts")
    <script src="{{asset("js/sharing-new.js")}}"></script>
@endsection