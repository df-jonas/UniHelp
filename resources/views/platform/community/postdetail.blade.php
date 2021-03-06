@extends('layouts.platform')
@section('pagetitle', 'Community - '. $post->title )
@section('content')

    @include('partials.platform.header')
    @include('partials.platform.subheader')
    <!-- begin container -->
    <section class="container">
        <!-- begin go back -->
    @include('partials.platform.go-back')
    <!-- end go back-->
        <!-- begin table -->
        <section class="table">
            <!-- begin sidebar -->
            <aside class="sidebar">
                <!-- User items -->
                <section class="item user-owned hide-mobile">
                    <header><a class="header-title"><i class="fa fa-upload"></i> Mijn posts</a></header>
                    <div class="padding">
                        @foreach($myposts as $mypost)
                            <div class="row flex">
                                <section class="icon col-lg-2 col-md-2 col-xs-2">
                                    <a href="{{ $post->user->url() }}" class="profile-url"><img src="{{ asset('img/avatars/' . $mypost->user->image )}}" class="account-img round-img" alt="User profile image"></a>
                                </section>
                                <section class="col-lg-8 col-md-8 col-xs-8">
                                    <h2 class="item-title no-margin"><a href="{{ $mypost->generateurl() }}">{{ $mypost->title }}</a></h2>
                                    <section class="rating col-xs-12 no-padding clearfix">
                                        <section class="col-xs-12 no-padding">
                                            <span class="fa fa-thumbs-up"></span> {{ $mypost->votesum() }} likes
                                        </section>
                                    </section>
                                </section>
                                <section class="col-lg-2 col-md-2 col-xs-2">
                                    <i class="fa fa-pencil brown"></i>
                                </section>
                            </div>
                        @endforeach
                    </div>
                </section>
                <!-- end User items -->
            </aside>
            <!-- end sidebar -->
            <!-- begin content -->
            <section class="content community detail">
                <section id="groupcontainer" class="item groups">
                    <section class="group-detail detail clearfix">
                        <header><a class="header-title">{{ $post->group->category->name }} > {{ $post->group->name }}</a></header>
                        <article class="detail group col-xs-12">
                            <div class="padding clearfix">
                                <div class="row">
                                    <section class="info col-lg-8 col-md-4 col-sm-6 col-xs-12">
                                        <div class="table">
                                            <div style="display: table-cell; width: 32px">
                                                <a href="{{$post->user->url()}}" class="profile-url"><img src="{{ asset('img/avatars/' . $post->user->image )}}" class="account-img round-img"></a>
                                            </div>
                                            <section style="display: table-cell; padding-left: 16px; vertical-align: middle">
                                                <a href="{{$post->user->url()}}" class="profile-url" class=""><h6 style="margin: 0">{{ $post->user->first_name }} {{ $post->user->last_name }}</h6></a>
                                                <h6 style="margin: 5px 0">{{ $post->postcreated() }}</h6>
                                            </section>
                                        </div>
                                    </section>
                                    <!-- buttons -->
                                    <section class="community-actions col-lg-4 col-md-8 col-sm-6 col-xs-12">
                                        <form>
                                            <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}">
                                            <a class="action like col-lg-12 col-xs-12" data-post-id="{{ $post->id }}"><i class="far fa-thumbs-up"></i> Like</a>
                                            <a class="action comment col-lg-12 col-xs-12"><i class="far fa-comment"></i> Reageer</a>
                                            <a class="action delete col-lg-12 col-xs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="far fa-ellipsis-v"></i></a>
                                            <ul id="actions-dropdown" class="dropdown-menu col-xs-12" aria-labelledby="actions-dropdown">
                                                <li>Bewerken</li>
                                                <li>Verwijderen</li>
                                            </ul>
                                        </form>
                                    </section>
                                    <!-- buttons -->
                                </div>
                                <!-- main content -->
                                <section class="col-xs-12 no-padding">
                                    <h2 class="settings-title">{{ $post->title }}</h2>
                                    <p>{{ $post->content }}</p>
                                </section>
                                <!-- main content -->
                                <!-- count box -->
                                <section class="info" style="margin-top: 5%">
                                    <ul>
                                        <li>Reacties: <span id="comment_count">{{ $post->commentcount() }}</span></li>
                                        <li>Likes: <span id="vote_count">{{ $post->votesum() }}</span></li>
                                    </ul>
                                </section>
                                <!-- count box -->
                            </div>
                            <!-- comment -->
                            <section id="comment-box" class="comment-box row flex padding">
                                <section class="picture hide-mobile col-lg-1 col-sm-2 col-xs-0">
                                    <img src="{{ asset('img/avatars/' . Auth::user()->image )}}" class="account-img round-img" alt="User profile image">
                                </section>
                                <form id="comment-form" class="col-lg-11 col-sm-10 col-xs-12" method="POST" action="{{ route('community-add-comment', ['group_id' => $post->group->url, 'post_id' => $post->id]) }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <section class="txt col-lg-11 col-sm-10 col-xs-10">
                                        <input type="text" name="comment" id="commentfield" class="col-xs-11" placeholder="reactie toevoegen" tabindex="1">
                                    </section>
                                </form>
                            </section>
                            <!-- comment -->
                        </article>
                    </section>
                </section>
                <section class="item clearfix" style="margin-top: 3em">
                    <section class="group">
                        <div class="padding">
                            <h2 class="settings-title">Reacties</h2>
                            <br>
                            <section id="messages" class="messages col-lg-12" style="border-bottom: none">
                                @foreach($post->comments as $comment)
                                    <section class="msg clearfix col-lg-12">
                                        <section class="picture hide-mobile col-lg-1 col-md-1 col-sm-2 col-xs-0">
                                            <a href="{{$post->user->url()}}"><img src="{{ asset('img/avatars/' . $comment->user->image )}}" class="group-img round-img" alt="User profile image"></a>
                                        </section>
                                        <section class="txt col-lg-11 col-md-11 col-sm-10 col-xs-12">
                                            <div class="table">
                                                <div style="display: table-cell;  float: left">
                                                    <a href="{{ $post->user->url() }}" class="profile-url"><span>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</span></a>
                                                </div>
                                                <div style="display: table-cell; padding-left: 16px; vertical-align: middle; float: right;">
                                                    <span>{{ $comment->commentcreated() }}</span>
                                                </div>
                                                <p>{{ $comment->content }}</p>
                                            </div>
                                        </section>
                                    </section>
                                @endforeach
                            </section>
                            <br>
                        </div>
                    </section>
                </section>
                <!-- end content -->
            </section>
        </section>
        <!-- end content -->
        <!-- end table -->
    </section>
    <!-- end container -->
    <!-- begin footer -->
    @include('partials.footer')
    <!-- end footer -->
@endsection
@section("scripts")
    <script src="{{ asset("js/community-detail.js") }}"></script>
@endsection
