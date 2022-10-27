<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Full House Admin Panel</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link {{Route::is('dashboard') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening {{Route::is(['admin.product_categories.index', 'admin.product_categories.create']) ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{Route::is(['admin.product_categories.index', 'admin.product_categories.create']) ? 'active' : ''}}">
                        <i class="fas fa-clipboard nav-icon"></i>
                        <p>
                            Категории
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.product_categories.index')}}" class="nav-link {{Route::is('admin.product_categories.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список категории</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.product_categories.create')}}" class="nav-link {{Route::is('admin.product_categories.create') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить новую категорию</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening {{Route::is(['admin.products.index', 'admin.products.create']) ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{Route::is(['admin.products.index', 'admin.products.create']) ? 'active' : ''}}">
                        <i class="fas fa-couch nav-icon"></i>
                        <p>
                            Товары
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.products.index')}}" class="nav-link {{Route::is('admin.products.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список товаров</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.products.create')}}" class="nav-link {{Route::is('admin.products.create') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить товар</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening {{Route::is(['admin.rooms.index', 'admin.rooms.create']) ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{Route::is(['admin.rooms.index', 'admin.rooms.create']) ? 'active' : ''}}">
                        <i class="fas fa-ruler-combined nav-icon"></i>
                        <p>
                            Комнаты
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.rooms.index')}}" class="nav-link {{Route::is('admin.rooms.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список комнат</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.rooms.create')}}" class="nav-link {{Route::is('admin.rooms.create') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить комнату</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening {{Route::is(['admin.deliveries.index', 'admin.deliveries.create']) ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{Route::is(['admin.deliveries.index', 'admin.deliveries.create']) ? 'active' : ''}}">
                        <i class="fas fa-truck nav-icon"></i>
                        <p>
                            Доставка
                            <i class="fas fa-angle-left right"></i>

                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.deliveries.index')}}" class="nav-link {{Route::is('admin.deliveries.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Типы доставки</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.deliveries.create')}}" class="nav-link {{Route::is('admin.deliveries.create') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить тип доставки</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening {{Route::is(['admin.users.index', 'admin.users.create']) ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{Route::is(['admin.users.index', 'admin.users.create']) ? 'active' : ''}}">
                        <i class="fas fa-users nav-icon"></i>
                        <p>
                            Пользователи
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.users.index')}}" class="nav-link {{Route::is('admin.users.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список пользователей</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.users.create')}}" class="nav-link {{Route::is('admin.users.create') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить пользователя</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening">
                    <a href="#" class="nav-link">
                        <i class="fas fa-blog nav-icon"></i>
                        <p>
                            Блог
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список постов</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить пост</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening">
                    <a href="#" class="nav-link">
                        <i class="fas fa-question nav-icon"></i>
                        <p>
                            Вопросы
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список вопросов</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening">
                    <a href="#" class="nav-link">
                        <i class="fas fa-comments nav-icon"></i>
                        <p>
                            Коментарии
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список коментарии</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening {{Route::is('admin.banners.index') ? 'menu-open' : ''}}">
                    <a href="#" class="nav-link {{Route::is('admin.banners.index') ? 'active' : ''}}">
                        <i class="fas fa-spray-can nav-icon"></i>
                        <p>
                            Банер
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.banners.index')}}" class="nav-link {{Route::is('admin.banners.index') ? 'active' : ''}}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Список банеров</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening">
                    <a href="#" class="nav-link">
                        <i class="fas fa-wrench nav-icon"></i>
                        <p>
                            Настройки
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Настройка сайта</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-is-opening menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-trash"></i>
                                    <p>Корзина</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<aside class="control-sidebar control-sidebar-dark">
</aside>
