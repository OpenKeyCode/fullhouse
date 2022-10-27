<div class="left-part left1 side-nav" style="width: 280px;">
    <nav class="general-menu">
        <ul class="general-menu-item" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
            <li class="sales"><a href="/new"><span>Новинки</span></a></li>
            <li class="event"><a href="/shop/akcii"><span>Скидки</span></a></li>

            @foreach($categories as $category)
                <li class="nav-side__section has-submenu">
                    <a itemprop="url" href="/shop/myagkaya-mebel-v-tashkente"><img
                            src="{{asset('storage/' . $category->icon)}}" width="25px" height="25px" alt="Мягкая мебель"
                            title="Мягкая мебель"><span>{{$category->title}}</span>
                    </a>
                    <ul class="nav-side__submenu">
                        <li class="name-caterogy-general-menu-lvl-2 submenu-title">{{$category->title}}</li>
                    @foreach($category->children as $child)
                            <li class="nav-side__section"><a itemprop="url" href="/shop/divany-v-tashkente">{{$child->title}}</a></li>
                        @endforeach
{{--                        <li class="nav-side__section"><a itemprop="url" href="/shop/divany-v-tashkente">Диваны</a></li>--}}
{{--                        <li class="nav-side__section"><a itemprop="url" href="/shop/kresla-v-tashkente">Кресла</a></li>--}}
{{--                        <li class="nav-side__section"><a itemprop="url" href="/shop/pufy-i-banketki">Пуфы и банкетки</a></li>--}}
                    </ul>
                </li>
            @endforeach

{{--            <li class="nav-side__section has-submenu"><a itemprop="url" href="/shop/myagkaya-mebel-v-tashkente"><img--}}
{{--                        src="/d/2_cushioned_furniture.svg" width="25px" height="25px" alt="Мягкая мебель"--}}
{{--                        title="Мягкая мебель"><span>Мягкая мебель</span></a>--}}
{{--                <ul class="nav-side__submenu">--}}
{{--                    <li class="name-caterogy-general-menu-lvl-2 submenu-title">Мягкая мебель</li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/divany-v-tashkente">Диваны</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/kresla-v-tashkente">Кресла</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/pufy-i-banketki">Пуфы и банкетки</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-side__section has-submenu"><a itemprop="url" href="/shop/for-home"><img--}}
{{--                        src="/d/3_household_products.svg" width="25px" height="25px" alt="Товары для дома"--}}
{{--                        title="Товары для дома"><span>Товары для дома</span></a>--}}
{{--                <ul class="nav-side__submenu">--}}
{{--                    <li class="name-caterogy-general-menu-lvl-2 submenu-title">Товары для дома</li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/tekstil">Текстиль</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/mirror">Зеркала</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-side__section has-submenu"><a itemprop="url" href="/shop/mebel-dlya-kukhni-v-tashkente"><img--}}
{{--                        src="/d/4_kitchen_furniture.svg" width="25px" height="25px" alt="Кухонная мебель"--}}
{{--                        title="Кухонная мебель"><span>Кухонная мебель</span></a>--}}
{{--                <ul class="nav-side__submenu">--}}
{{--                    <li class="name-caterogy-general-menu-lvl-2 submenu-title">Кухонная мебель</li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/kukhonnyye-garnitury-v-tashkente">Кухонные--}}
{{--                            гарнитуры</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/folder/nastennye-shkafy">Настенные--}}
{{--                            шкафы</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-side__section has-submenu"><a itemprop="url" href="/shop/shkai-v-tashkente"><img--}}
{{--                        src="/d/5_wardrobes_and_racks.svg" width="25px" height="25px" alt="Шкафы и стеллажи"--}}
{{--                        title="Шкафы и стеллажи"><span>Шкафы и стеллажи</span></a>--}}
{{--                <ul class="nav-side__submenu">--}}
{{--                    <li class="name-caterogy-general-menu-lvl-2 submenu-title">Шкафы и стеллажи</li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/vse-shkafy">Все шкафы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/shkaf-kupe-v-tashkente">Шкафы купе</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/raspashnyye-shkafy-v-tashkente">Распашные--}}
{{--                            шкафы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/uglovye-shkafy">Угловые шкафы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/bookcase">Книжные шкафы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/shkafy-dlya-prikhozhey-v-tashkente">Шкафы--}}
{{--                            для прихожей</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/obuvnye-shkafy">Обувные шкафы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url"--}}
{{--                                                     href="/shop/nastennyye-shkafy-dlya-kukhni-v-tashkente">Настенные--}}
{{--                            шкафы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/modulnyye-gostinyye">Модульная--}}
{{--                            мебель</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/polki">Полки</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/stellazhi">Стеллажи</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-side__section has-submenu"><a itemprop="url" href="/shop/krovati-i-matrasy"><img--}}
{{--                        src="/d/6_beds_and_mattresses.svg" width="25px" height="25px" alt="Кровати и матрасы"--}}
{{--                        title="Кровати и матрасы"><span>Кровати и матрасы</span></a>--}}
{{--                <ul class="nav-side__submenu">--}}
{{--                    <li class="name-caterogy-general-menu-lvl-2 submenu-title">Кровати и матрасы</li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/vse-krovati">Все кровати</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/detskie-krovatki">Кроватки</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/detskiye-krovati-v-tashkente">Детские--}}
{{--                            кровати</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/odnospalnye-krovati">Односпальные--}}
{{--                            кровати</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/polutorospalnye-krovati">Кровати--}}
{{--                            полуторки</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/dvuspalnye-krovati">Двуспальные--}}
{{--                            кровати</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/dvukh-yarusnyye-krovati-v-tashkente">Двухъярусные--}}
{{--                            кровати</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/zheleznye-krovati">Железные кровати</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/matrasy">Матрасы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/podushki">Подушки</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/zashchitnye-chehly">Защитные чехлы</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-side__section has-submenu"><a itemprop="url" href="/shop/stoly-i-stulya"><img--}}
{{--                        src="/d/7_tables_and_chairs.svg" width="25px" height="25px" alt="Столы и стулья"--}}
{{--                        title="Столы и стулья"><span>Столы и стулья</span></a>--}}
{{--                <ul class="nav-side__submenu">--}}
{{--                    <li class="name-caterogy-general-menu-lvl-2 submenu-title">Столы и стулья</li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/vse-stoly">Все столы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/zhurnalnye-stoly">Журнальные столы</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/kompyuternye-stoly">Компьютерные--}}
{{--                            столы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/pismennye-stoly">Письменные столы</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/tryumo-i-trelyazh-v-tashkente">Туалетные--}}
{{--                            столики</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/stoly-transformery">Столы--}}
{{--                            трансформеры</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li class="nav-side__section has-submenu"><a itemprop="url" href="/shop/tumby-i-komody"><img--}}
{{--                        src="/d/8_cabinets_and_dressers.svg" width="25px" height="25px" alt="Тумбы и комоды"--}}
{{--                        title="Тумбы и комоды"><span>Тумбы и комоды</span></a>--}}
{{--                <ul class="nav-side__submenu">--}}
{{--                    <li class="name-caterogy-general-menu-lvl-2 submenu-title">Тумбы и комоды</li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/vse-tumby">Все тумбы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/tumby-pod-televizor">Тумбы под--}}
{{--                            телевизор</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/tumby-v-tashkente">Прикроватные--}}
{{--                            тумбы</a></li>--}}
{{--                    <li class="nav-side__section"><a itemprop="url" href="/shop/komody-v-tashkente">Комоды</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

        </ul>
        <div class="support-menu"><span class="name-support-menu">Комнаты</span>
            <ul>
                <li><a href="/shop/mebel-dlya-gostinoj-v-tashkente">Гостиная</a></li>
                <li><a href="/shop/mebel-dlya-detskoy-komnaty-v-tashkente">Детская комната</a></li>
                <li><a href="/shop/mebel-dlya-spalnoy-komnati-v-tashkente">Спальня</a></li>
                <li><a href="/shop/kuhni">Кухня</a></li>
                <li><a href="/shop/mebel-dlya-prikhozhey-v-tashkente">Прихожая</a></li>
                <li><a href="/shop/domashnij-ofis">Домашний офис</a></li>
            </ul>
        </div>
    </nav>
</div>
