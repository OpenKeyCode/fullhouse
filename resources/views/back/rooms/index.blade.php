@extends('layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 220px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комнаты</h1>
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
                                        <th>Название</th>
{{--                                        <th>Телефон</th>--}}
{{--                                        <th>Роль</th>--}}
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rooms as $room)
                                        <tr>
                                            <td>{{$room->id}}</td>
                                            <td>{{$room->title}}</td>
{{--                                            <td>{{$room->phone}}</td>--}}
{{--                                            <td><span class="tag tag-success">{{$room}}</span></td>--}}
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('admin.rooms.show', $room->id)}}" type="button" class="btn btn-primary mr-1"><i class="fas fa-eye"></i>
                                                    </a>
                                                    <a type="button" class="btn btn-success mr-1"><i class="fas fa-pen"></i>
                                                    </a>
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
                                <div class="d-flex justify-content-end m-1">{{$rooms->links()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
