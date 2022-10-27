@extends('layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 220px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Баннер</h1>
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
                        <form action="{{route('admin.banners.update', $banner->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="title">Названия доставки</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Enter email" value="{{$banner->title}}">
                                </div>
                                @error('title')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <label for="alter_text">Альтернативный текст</label>
                                    <input type="text" name="alter_text" class="form-control" id="alter_text"
                                           placeholder="Enter email" value="{{$banner->alter_text}}">
                                </div>
                                @error('alter_text')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                image
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Выбрать</label>
                                </div>
                                @error('image')
                                {{$message}}
                                @enderror
                            </div>
                            <div class="form-group">
                                image mobile
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_mobile" id="customFile">
                                    <label class="custom-file-label" for="customFile">Выбрать</label>
                                </div>
                                @error('image')
                                {{$message}}
                                @enderror
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

@push('fileUploadInput')
    @include('includes.js.file')
@endpush
