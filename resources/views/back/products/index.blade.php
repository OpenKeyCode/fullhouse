@extends('layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 220px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Товары</h1>
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
                <a href="{{route('admin.products.create')}}" class="btn btn-primary">Добавить</a>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список продуктов</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Картика</th>
                                        <th>Категория</th>
                                        <th>Комната</th>
                                        <th>Цена</th>
                                        <th>Статус</th>
                                        <th>Идентификатор</th>
                                        <th>Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->id}}</td>
                                            <td>{{$product->title}}</td>
                                            <td><a href="{{asset('storage/'.$product->image)}}">Ссылка</a></td>
                                            <td>{{$product->category->title}}</td>
                                            <td>{{$product->room->title}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                @if($product->status)
                                                    <span style="color: #00b44e">active</span>
                                                @else
                                                    <span style="color: #7d1038">no active</span>
                                                @endif
                                            </td>
                                            <td>{{$product->identifier}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('admin.products.show', $product->id)}}"
                                                       type="button" class="btn btn-primary mr-1"><i
                                                            class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('admin.products.edit', $product->id)}}"
                                                       type="button" class="btn btn-success mr-1"><i
                                                            class="fas fa-pen"></i>
                                                    </a>
                                                    <form
                                                        action="{{route('admin.products.destroy', $product->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-end m-1">{{$products->links()}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
