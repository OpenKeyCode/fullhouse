@extends('layouts.main')
@section('content')
    <div class="content-wrapper pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-10">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.users.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name"  placeholder="Имя" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Фамилия</label>
                                <input id="last_name" type="text"
                                       class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Фамилия"
                                       value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Телефон</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Телефон"
                                       name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                       placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                       placeholder="Пароль" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Подтвердите пароль</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                           placeholder="Подтвердите пароль" required autocomplete="new-password">
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
