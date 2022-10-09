@extends('layouts.main')

@section('content')
    <div class="content-wrapper" style="min-height: 220px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Категория</h1>
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
                <h1>{{$productCategory->title}}</h1>
                <br>
                {{$productCategory->image}}
                <br>
                {{$productCategory->color}}
                <br>
                {{$productCategory->parent_category_id->title}}
                <br>
                {!! $productCategory->description !!}
            </div>
        </section>
    </div>
@endsection
