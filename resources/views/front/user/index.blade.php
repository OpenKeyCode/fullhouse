@extends('layouts.app')
@section('content')
    <main class="page">
        <div class="path-wrapper">
            <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="site-path"><span itemscope=""
                                                                                                  itemprop="itemListElement"
                                                                                                  itemtype="http://schema.org/ListItem"><a
                        itemprop="item" href="/"><span itemprop="name"><span>Главная</span></span><meta
                            itemprop="position" content="1"></a></span> <span itemscope="" itemprop="itemListElement"
                                                                              itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="/user"><span itemprop="name"><span>Регистрация</span></span><meta
                            itemprop="position" content="2"></a></span></div>
        </div>
        <h1 class="h1style">Мой кабинет</h1>
        <div class="g-label-tabs g-label-tabs--indents">
            <a class="g-user-profile__item g-user-profile--opened" href="/user?mode=home">Мой кабинет</a>
            <a class="g-user-profile__item " href="/user?mode=settings">Личные данные</a>
            <a class="g-user-profile__item " href="/user?mode=change_password">Смена пароля</a> <a href="/user/logout"
                                                                                                   class="g-button g-user__button">Выйти</a>
        </div>
        <div class="user__home-page">
            <br>Добро пожаловать! Вы авторизовались как nodosi7699.<br><br>
            <b>E-mail:</b> nodosi7699@haboty.com <br>
            <b>Накопленная сумма:</b> 0 сўм
            <br>
            <b>Количество бонусов:</b> 0.00
            <br>
            <div class="g-clear"></div>
        </div>
    </main>
@endsection
