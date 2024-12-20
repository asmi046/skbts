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

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(98795126, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/98795126" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
    <div class="modal_win" id="global_app">
        <modal-window rout="/send_consult" redirect="/thencs" hesh="showModal" title="Помощь специалиста" subtitle="Мы свяжемся с Вами в течении 15 минут"></modal-window>
    </div>

    <x-menues.side-menu></x-menues.side-menu>

    @include("allicon")
    <main id="main">
        <header id="top_header">
            <div class="container">
                <a class="logo" href="{{ route('home')}}">
                    <img src="{{asset('img/logo.svg')}}" alt="Переоборудование Авто">
                </a>
                <nav>
                    <ul>
                        <x-menu-items></x-menu-items>
                    </ul>
                </nav>

                <div class="header_contacts">
                    <x-icon-a href="tel:+7{{ phone_format(config('contacts.phone')) }}" ancor="{{config('contacts.phone')}}" icon="phone_icon"></x-icon-a>
                    <a class="button" href="#showModal">Заказать звонок</a>
                </div>

            </div>
        </header>

        @yield('main')
        <footer id="footer">
            <div class="container">
                <div class="coll">
                    <a class="logo" href="{{ route('home')}}">
                        <img src="{{asset('img/logo_white.svg')}}" alt="Переоборудование Авто">
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
                    <x-icon-a href="tel:+7{{ phone_format(config('contacts.phone')) }}" ancor="{{config('contacts.phone')}}" icon="phone_icon"></x-icon-a>
                    <div class="adr_mail">
                        <p class="adres">{{config('contacts.adress')}}</p>
                        <a href="mailto:89102133353@mail.ru">{{config('contacts.email')}}</a>
                    </div>

                    <a href="#showModal" class="button">Заказать звонок</a>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>
