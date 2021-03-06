<header id="platform-header" class="clearfix">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <section class="logo col-lg-2 col-md-2 col-sm-2 col-xs-4">
                <a href="{{ route('sharing-index') }}"><img class="logo" src="{{ URL::asset('img/logo/favicon_white.png') }}" alt="UniHelp logo"></a>
            </section>
            <!-- end logo -->
            <!-- user menu -->
            <section class="account col-lg-2 col-lg-push-10 col-md-4  col-md-push-10 col-sm-3 col-sm-push-10 col-xs-1 col-xs-push-6">
                <div class="row flex">
                    <!-- notifications -->
                    <div class="col-lg-6 hide-mobile">
                        <div class="user-notifications">
                            <i class="fa fa-bell dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>

                            @if(!(Auth::user()->notifs_unread->count() <= 0))
                                <span>{{ Auth::user()->notifs_unread->count() }}</span>
                            @endif


                        <!-- notifications dropdown -->
                            <ul id="notifications-dropdown" class="dropdown-menu col-xs-12" aria-labelledby="notifications-dropdown">
                                @if(!(Auth::user()->notifs_unread->count() <= 0))
                                @foreach(Auth::user()->notifs_unread->slice(0, 10) as $notification)
                                    <li>
                                        <a href="{{ $notification->url }}"><i class="fa fa-comment"></i>
                                            <strong>{{ $notification->from->first_name}}</strong> {{ $notification->text }}
                                        </a>
                                    </li>
                                @endforeach
                                @else
                                    <li>
                                        <a href="">
                                          Er zijn geen nieuwe meldingen.
                                        </a>
                                    </li>
                                @endif


                                <a class="user-info" href="{{ route('profile-notifications') }}">
                                    <div class="row no-margin">
                                        <h6>Bekijk alles</h6>
                                    </div>
                                </a>
                            </ul>
                        </div>
                        <!-- end notifications dropdown -->
                    </div>
                    <!-- end notifications -->


                    <!-- profile -->
                    <section class="user-profile col-lg-6">
                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="account-img round-img" data-toggle="dropdown" alt="User profile image">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" class="account_dropdown_btn">
                                <path d="M4.5 5.5a.5.5 0 0 1-.35-.14L0 1.4.7.5l3.8 3.62L8.3.5l.7.9-4.15 3.96a.5.5 0 0 1-.35.14z"></path>
                            </svg>
                        </div>
                        <!-- profile dropdown -->
                        <ul id="account-dropdown" class="dropdown-menu col-xs-12" aria-labelledby="account-dropdown">
                            <a class="user-info padding" href="{{ route('profile-index', ['id' => Auth::id()]) }}">
                                <div class="row flex no-margin">
                                    <div class="col-lg-3">
                                        <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="group-img round-img vertical-center" data-toggle="dropdown">
                                    </div>
                                    <div class="col-lg-9">
                                        <h6>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h6>
                                        <h6>Bekijk profiel</h6>
                                    </div>
                                </div>
                            </a>
                            @if(Auth::user()->role == 'admin')
                                <li>
                                    <a href="{{ route('admin-index') }}"><i class="fa fa-dashboard"></i> Admin dashboard
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('profile-downloads') }}"><i class="fa fa-download"></i> Mijn downloads
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('profile-uploads') }}"><i class="fa fa-upload"></i> Mijn uploads </a>
                            </li>

                            <li>
                                <a href="{{ route('profile-ratings') }}"><i class="fa fa-star"></i> Mijn beoordelingen
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('profile-settings') }}"><i class="fa fa-cog"></i> Instellingen
                                </a>
                            </li>

                            <li>
                                <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Uitloggen </a>
                            </li>
                        </ul>
                        <!-- end profile dropdown -->
                    </section>
                    <!-- end notifications -->
                </div>
            </section>
            <!-- end user menu -->

            <!-- Mobile menu-->
            <ul id="mobile-header" class="col-xs-12">
                <li><a href="{{ route('profile-index', ['id' => Auth::id()]) }}">Profiel</a></li>
                <li><a href="#">Admin dashboard</a></li>
                <li><a href="{{ route('profile-notifications') }}">Notificaties</a></li>
                <li><a href="{{ route('profile-uploads') }}">Uploads</a></li>
                <li><a href="{{ route('profile-downloads') }}">Downloads</a></li>
                <li><a href="{{ route('profile-ratings') }}">Beoordelingen</a></li>
                <li><a href="{{ route('profile-settings') }}">Instellingen</a></li>
            </ul>
            <!-- end mobile menu -->
        </div>
    </div>
</header>