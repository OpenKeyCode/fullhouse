@extends('layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 220px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="d-flex justify-content-end mb-2 mr-2">
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список пользоваелей</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Имя</th>
                                        <th>Телефон</th>
                                        <th>Роль</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td><span class="tag tag-success">
                                                    @switch($user->role)
                                                        @case(1) Пользователь @break
                                                        @case(0) Аминистратор @break
                                                        @default Не определено @break
                                                    @endswitch
                                                </span></td>
                                            <td>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-primary mr-1"><i class="fas fa-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-success mr-1"><i class="fas fa-pen"></i>
                                                    </button>
                                                    <form action="#">
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end m-1">{{$users->links()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection