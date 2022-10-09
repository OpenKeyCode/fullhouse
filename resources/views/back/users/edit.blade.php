@extends('layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 1604.44px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Профиль пользователя</h1>
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
                                </ul>
                                <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-block"><b>Удалить</b></button>
                                </form>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#setting" data-toggle="tab">Настройки</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="setting">
                                        <form class="form-horizontal"
                                              action="{{route('admin.users.update', $user->id)}}" method="post">
                                            @csrf
                                            @method('patch')
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
                                                <div class="col-sm-10">
                                                    <input value="{{$user->name}}" name="name" type="text"
                                                           class="form-control"
                                                           id="inputName" placeholder="Имя">
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputLastName"
                                                       class="col-sm-2 col-form-label">Фамилия</label>
                                                <div class="col-sm-10">
                                                    <input value="{{$user->last_name}}" name="last_name" type="text"
                                                           class="form-control"
                                                           id="inputLastName" placeholder="Фамилия">
                                                    @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input value="{{$user->email}}" name="email" type="email"
                                                           class="form-control"
                                                           id="inputEmail" placeholder="Email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputPhone" class="col-sm-2 col-form-label">Телефон</label>
                                                <div class="col-sm-10">
                                                    <input value="{{$user->phone}}" name="phone" type="tel"
                                                           class="form-control"
                                                           id="inputPhone" placeholder="Телефон">
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-success">Обновить</button>
                                                </div>
                                            </div>
                                        </form>
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
