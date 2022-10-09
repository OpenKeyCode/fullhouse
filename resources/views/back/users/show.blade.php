@extends('layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 1604.44px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">{{$user->name .' '. $user->last_name}}</h3>

                                <p class="text-muted text-center">{{$user->role}}</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Email</b> <a href="mail:{{$user->email}}"
                                                        class="float-right">{{$user->email}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Телефон</b> <a href="tel:{{preg_replace('![^0-9]+!','',$user->phone)}}"
                                                          class="float-right">{{$user->phone}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Роль</b> <a class="float-right">{{$user->role}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Дата регистрации</b> <a class="float-right">{{$user->created_at}}</a>
                                    </li>
                                </ul>
                                <a class="btn btn-success btn-block mb-2"><b>Изменить</b></a>
                                <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-block"><b>Удалить</b></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Активность</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#search_user" data-toggle="tab">Запросы
                                            поиска</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#wishlists" data-toggle="tab">Избранные</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#quiz" data-toggle="tab">Вопросы</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#comment" data-toggle="tab">Коментарии</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="activity">
                                        <div class="post">
                                            <div class="user-block">
                                                <span>Jonathan Burke Jr.</span>
                                                <span class="">7:30 PM today</span>
                                            </div>
                                            <p>
                                                Lorem ipsum represents a long-held tradition for designers,
                                                typographers and the like. Some people hate it and argue for
                                                its demise, but others ignore the hate as they create awesome
                                                tools to help create filler text for everyone from bacon lovers
                                                to Charlie Sheen fans.
                                            </p>

                                            <p>
                                                <a href="#" class="link-black text-sm mr-2"><i
                                                        class="fas fa-share mr-1"></i> Share</a>
                                                <a href="#" class="link-black text-sm"><i
                                                        class="far fa-thumbs-up mr-1"></i> Like</a>
                                                <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="search_user">
                                        search
                                    </div>
                                    <div class="tab-pane" id="wishlists">
                                        wishlists
                                    </div>
                                    <div class="tab-pane" id="quiz">
                                        quiz
                                    </div>
                                    <div class="tab-pane" id="comment">
                                        coment
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
