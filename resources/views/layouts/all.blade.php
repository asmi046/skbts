<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @header_seo

    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon256.png')}}" sizes="256x256">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon128.png')}}" sizes="128x128">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon64.png')}}" sizes="64x64">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('/img/favicons/icon16.png')}}" sizes="16x16">
    <link rel="icon" type="image/svg" href="{{asset('/img/favicons/fav.svg')}}" sizes="any">

    <meta name="_token" content="{{ csrf_token() }}">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'public/scss/main.scss'
    ])
</head>
<body>
    @include("allicon")
    <main id="main">
        <header id="top_header">
            <div class="container">
                <a class="logo" href="{{ route('home')}}">
                    <img src="{{asset('img/logo.svg')}}" alt="{{seo_data()->seo_data->seo_title;}}">
                </a>
                <nav>
                    <ul>
                        <x-menu-items></x-menu-items>
                    </ul>
                </nav>

                <div class="header_contacts">
                    <x-icon-a href="#" ancor="+7(999) 999-99-99" icon="phone_icon"></x-icon-a>
                    <a class="button" href="#">Заказать звонок</a>
                </div>

            </div>
        </header>

        @yield('main')
        <footer>
            <div class="container">
                <div class="coll">
                    <a class="logo" href="{{ route('home')}}">
                        <img src="{{asset('img/logo_white.svg')}}" alt="{{seo_data()->seo_data->seo_title;}}">
                    </a>
                    <p class="copyright">
                        АвтоПрофи Сервис 2024©
                    </p>
                </div>
                <div class="coll">
                    <p><strong>Навигация</strong></p>
                    <nav>
                        <ul>
                            <x-menu-items></x-menu-items>
                        </ul>
                    </nav>
                </div>

                <div class="coll contacts_coll">
                    <x-icon-a href="#" ancor="+7(999) 999-99-99" icon="phone_icon"></x-icon-a>
                    <div class="adr_mail">
                        <p class="adres">г. Курск, Гунатовская 32</p>
                        <a href="mailto:89102133353@mail.ru">89102133353@mail.ru</a>
                    </div>

                    <a href="#" class="button">Заказать звонок</a>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>
