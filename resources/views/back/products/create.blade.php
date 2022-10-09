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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Названия категории</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="title" value="{{old("title")}}">
                            </div>
                            @error('title')
                            {{$message}}
                            @enderror
                            <div class="form-group">
                                <label for="editor">Описание</label>
                                <textarea name="description" id="editor">
                                {{old("description")}}
                            </textarea>
                            </div>
                            @error('description')
                            {{$message}}
                            @enderror
                            <div class="form-group">
                                <label for="short_description">Краткая описание</label>
                                <textarea name="short_description" id="short_description">
                                {{old("short_description")}}
                            </textarea>
                            </div>
                            @error('short_description')
                            {{$message}}
                            @enderror

                            <div class="form-group">
                                <label for="price">Цена</label>
                                <input type="number" name="price" class="form-control" id="price"
                                       placeholder="price" value="{{old("price")}}">
                            </div>
                            @error('price')
                            {{$message}}
                            @enderror

                            <div class="form-group">
                                <label for="discount">Скидка</label>
                                <input type="number" name="discount" class="form-control" id="discount"
                                       placeholder="discount" value="{{old("discount")}}">
                            </div>
                            @error('discount')
                            {{$message}}
                            @enderror


                            <div class="form-group">
                                <label for="stock">В наличии</label>
                                <select name="stock" class="form-control" id="stock">
                                    <option selected value="1">В наличии</option>
                                    <option value="0">Нет в наличии</option>
                                </select>
                            </div>
                            @error('stock')
                            {{$message}}
                            @enderror

                            <div class="form-group">
                                <label for="status">Статус</label>
                                <select name="status" class="form-control" id="status">
                                    <option selected value="1">Активный</option>
                                    <option value="0">Нет активный</option>
                                </select>
                            </div>
                            @error('status')
                            {{$message}}
                            @enderror

                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile"
                                           accept="png,jpeg">
                                    <label class="custom-file-label" for="customFile">Выбрать</label>
                                </div>
                            </div>
                            @error('image')
                            {{$message}}
                            @enderror


                            <div class="form-group">
                                <label for="parameters">parameters</label>
                                <textarea name="parameters" id="parameters">
                                {{old("parameters")}}
                            </textarea>
                            </div>
                            @error('parameters')
                            {{$message}}
                            @enderror

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="product_category_id">Категории</label>
                                        <select id="product_category_id" name="product_category_id" class="form-control  select2"
                                                style="width: 100%;">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"
                                                        selected="selected">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('product_category_id')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="room_id">Комната</label>
                                        <select id="room_id" name="room_id" class="form-control  select2"
                                                style="width: 100%;">
                                            @foreach($rooms as $room)
                                                <option value="{{$room->id}}"
                                                        selected="selected">{{$room->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('room_id')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="delivery_id">Комната</label>
                                        <select id="delivery_id" name="delivery_id" class="form-control  select2"
                                                style="width: 100%;">
                                            @foreach($deliveries as $delivery)
                                                <option value="{{$delivery->id}}"
                                                        selected="selected">{{$delivery->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('delivery_id')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <button type="submit">создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('switch')
    @include('includes.js.switch')
@endpush
@push('summernote')
    @include('includes.js.editor')
@endpush

@push('fileUploadInput')
    @include('includes.js.file')
@endpush
@push('selectJs')
    @include('includes.js.select')
@endpush
@push('selectCss')
    @include('includes.css.select')
@endpush

