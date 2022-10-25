@extends('layouts.app')
@section('content')

    <main class="page">
        <div class="path-wrapper">
            <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="site-path"><span itemscope=""
                                                                                                  itemprop="itemListElement"
                                                                                                  itemtype="http://schema.org/ListItem"><a
                        itemprop="item" href="/"><span itemprop="name"><span>Главная</span></span><meta
                            itemprop="position" content="1"></a></span> <span itemscope="" itemprop="itemListElement"
                                                                              itemtype="http://schema.org/ListItem"><a
                        itemprop="item" href="/user"><span itemprop="name"><span>Регистрация</span></span><meta
                            itemprop="position" content="2"></a></span> <span>Регистрация</span></div>
        </div>
        <h1 class="h1style">Регистрация</h1>


        <div class="g-auth">
            <div class="g-auth__sideleft">


                <form action="{{route('register')}}" method="POST" id="form_g-user-register">
                    @csrf

                    <div class="tpl-value  g-form-field--title-pos-1 g-form-field--required">
                        <div class="g-form-field__title "><label for="email">E-mail<span
                                    class="g-form-field__required-mark">*</span></label></div>
                        <div class="g-form-field__value"><input placeholder="E-mail *" required=""
                                                                class="g-form-control-text g-form-control-value g-form-control--required"
                                                                type="text" size="32" maxlength="50" value=""
                                                                name="email" id="email"></div>
                    </div>

                    <div class="tpl-value  g-form-field--title-pos-1 g-form-field--required">
                        <div class="g-form-field__title "><label for="name">Имя<span
                                    class="g-form-field__required-mark">*</span></label></div>
                        <div class="g-form-field__value"><input placeholder="Имя *" required=""
                                                                class="g-form-control-text g-form-control-value g-form-control--required"
                                                                type="text" size="32" maxlength="100" value=""
                                                                name="name" id="name"></div>
                    </div>


                    <div class="tpl-value  g-form-field--title-pos-1 g-form-field--required">
                        <div class="g-form-field__title "><label for="surname">Фамилия<span
                                    class="g-form-field__required-mark">*</span></label></div>
                        <div class="g-form-field__value"><input placeholder="Фамилия *" required=""
                                                                class="g-form-control-text g-form-control-value g-form-control--required"
                                                                type="text" size="32" maxlength="100" value=""
                                                                name="last_name" id="surname"></div>
                    </div>


                    <div class="tpl-value  g-form-field--title-pos-1 g-form-field--required">
                        <div class="g-form-field__title "><label for="phone">Телефон<span
                                    class="g-form-field__required-mark">*</span></label></div>
                        <div class="g-form-field__value"><input placeholder="Телефон *" required=""
                                                                class="g-form-control-text g-form-control-value g-form-control--required"
                                                                type="text" size="32" maxlength="100" value=""
                                                                name="phone" id="phone"></div>
                    </div>


                    <div class="tpl-value  g-form-field--title-pos-1 g-form-field--required">
                        <div class="g-form-field__title "><label for="pwd">Пароль<span
                                    class="g-form-field__required-mark">*</span></label></div>
                        <div class="g-form-field__value"><input placeholder="Пароль" required=""
                                                                class="g-form-control-text g-form-control-value g-form-control--required"
                                                                type="password" size="32" maxlength="32" value=""
                                                                name="password" id="pwd"></div>
                    </div>


                    <div class="tpl-value  g-form-field--title-pos-1 g-form-field--required">
                        <div class="g-form-field__title "><label for="pwd2">Введите пароль повторно<span
                                    class="g-form-field__required-mark">*</span></label></div>
                        <div class="g-form-field__value"><input placeholder="Введите пароль повторно" required=""
                                                                class="g-form-control-text g-form-control-value g-form-control--required"
                                                                type="password" size="32" maxlength="32" value=""
                                                                name="password_confirmation" id="pwd2"></div>
                    </div>
                    <div class="g-form-row g-form-row--submit">
                        <input type="submit" class="g-button g-user__button" value="Зарегистрироваться">
                    </div>
                </form>
            </div>

            <div class="clear"></div>
        </div>
    </main>

    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Register') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('register') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

    {{--                                @error('name')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="last_name" class="col-md-4 col-form-label text-md-end">last_name</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>--}}

    {{--                                @error('last_name')--}}
    {{--                                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="phone" class="col-md-4 col-form-label text-md-end">phone</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>--}}

    {{--                                @error('phone')--}}
    {{--                                <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-3">--}}
    {{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="row mb-0">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Register') }}--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
