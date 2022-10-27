@extends('layouts.main')

@section('content')
    <div class="content-wrapper" style="min-height: 220px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категории</h1>
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
                        <form action="{{route('admin.product_categories.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Названия категории</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Enter email" value="{{old("title")}}">
                            </div>
                            @error('title')
                            {{$message}}
                            @enderror
                            <textarea name="description" id="editor">
                                {{old("description")}}
                            </textarea>
                            @error('description')
                            {{$message}}
                            @enderror

                            <div class="form-group">
                                image
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile" accept="png,jpeg">
                                    <label class="custom-file-label" for="customFile">Выбрать</label>
                                </div>
                                @error('image')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                icon
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="icon" id="customFile" accept="png,jpeg">
                                    <label class="custom-file-label" for="customFile">Выбрать</label>
                                </div>
                                @error('icon')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleColorInput" class="form-label">Цвет</label>
                                        <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput"
                                               value="#563d7c" title="Choose your color">
                                        @error('color')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Minimal</label>
                                        <select name="parent_category_id"  class="form-control  select2" style="width: 100%;">
                                            <option value="">Выбрать</option>
                                        @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                            @endforeach
                                        </select>
                                        @error('parent_category_id')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Создать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
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
