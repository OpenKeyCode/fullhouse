@extends('layouts.main')
@section('content')
    <div class="content-wrapper" style="min-height: 220px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комната</h1>
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
                        <form action="{{route('admin.rooms.update', $room->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="title">Названия комнаты</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Enter email" value="{{$room->title}}">
                            </div>
                            @error('title')
                            {{$message}}
                            @enderror

                            <textarea name="description" id="editor">
                                {{$room->description}}
                            </textarea>
                            @error('description')
                            {{$message}}
                            @enderror
                            <button type="submit">создать</button>
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

