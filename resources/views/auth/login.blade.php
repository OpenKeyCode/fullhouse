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
                            itemprop="position" content="2"></a></span> <span>Авторизация</span></div>
        </div>
        <h1 class="h1style">Авторизация</h1>


        <div class="g-auth-page-block-wr">
            <div class="g-auth-page-block">
                <div class="g-auth-page-block__sideleft">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="g-form-field g-auth__row">
                            <div class="g-form-field__title"><label for="login">E-mail:</label></div>
                            <input class="g-form-control-text" name="email" id="login" placeholder="sample@domain.ru"
                                   type="text" value=""></div>
                        <div class="g-form-field g-auth__row">
                            <div class="g-form-field__title"><label for="password">Пароль:</label></div>
                            <input class="g-form-control-text" type="password" name="password" id="password"
                                   placeholder="**********"></div>
                        <div class="g-auth__left-container" style="padding: 0;">
                            <button type="submit" class="g-button">Вход</button>
                        </div>
                        <div class="g-auth__right-container"><a href="/user/forgot_password"
                                                                class="g-auth__fogot-password">Забыли пароль?</a><a
                                href="/user/register" class="g-button g-button--invert">Регистрация</a></div>
                        <textarea name="g-recaptcha-response" style="display: none !important;"></textarea></form>
                </div>
                <div class="g-auth-page-block__sideright">
                    <div class="g-auth__row" style="margin:0">


                        <div class="g-form-field__title"><b>Также Вы можете войти через:</b></div>
                        <div class="g-social">
                            <a href="/users/hauth/start/facebook" class="g-social__item g-social__item--fb">Facebook</a>
                            <a href="/users/hauth/start/google" class="g-social__item g-social__item--gp">Google</a>

                        </div>


                        <div class="g-auth__personal-note">
                            Я согласен(на) на обработку моих персональных данных. <a href="/user?mode=agreement"
                                                                                     target="_blank">Подробнее</a></div>
                    </div>
                </div>
                <div class="g-clear"></div>
            </div>
        </div>
        <div class="g-notice g-notice--indents">
            Внимание! Для корректной работы у Вас в браузере должна быть включена поддержка cookie. В случае если по
            каким-либо техническим причинам передача и хранение cookie у Вас не поддерживается, вход в систему будет
            недоступен.
        </div>
    </main>
@endsection
