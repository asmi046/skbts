@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<section class="banner">
    <div class="container">
        <div class="banner_content">
            <div class="text">
                <div class="wrap">
                    <h1>
                        Регистрация любого <br>переоборудования автомобиля в <br><span class="text_marker">ГИБДД</span>, получение <span class="text_marker">СБКТС</span>, <span class="text_marker">ЭПТС</span>
                    </h1>
                    <p class="sub_title">Официальное оформление любых <br>изменений в кратчайший срок</p>
                    <p class="sub_h"><strong>Оставьте заявку и получите:</strong></p>
                    <div class="text_styles">
                        <ul>
                            <li>Расчет стоимости</li>
                            <li>Консультацию эксперта</li>
                            <li>Запись авто на испытания в лабораторию</li>
                        </ul>
                        <a href="#showModal" class="button">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <div class="img">
                <img src="{{ asset('img/banner_photo.webp') }}" alt="{{seo_data()->seo_data->seo_title;}}">
            </div>
        </div>
    </div>
</section>

<section id="adv" class="adv_section">
    <div class="container">
        <div class="adv_wrapper">
            <x-adv-blk icon="adv_dogovor" title="Работаем по <br>договору"></x-adv-blk>
            <x-adv-blk icon="adv_razsr" title="Возможность <br>рассрочки"></x-adv-blk>
            <x-adv-blk icon="adv_time" title="Экономия <br>времени"></x-adv-blk>
            <x-adv-blk icon="adv_mech" title="Отлаженный механизм работы"></x-adv-blk>
            <x-adv-blk icon="adv_posr" title="Работаем без посредников"></x-adv-blk>
        </div>
    </div>
    <div class="bt_line"></div>
</section>

<section id="services">
    <div class="container">
        <h2 class="section_h2">Оформляем <span class="text_marker">СБКТС</span> на следующие категории ТС</h2>
        <div class="services_wrapper">
            <x-service title="Легковые <br>автомобили" cats="Категория M1" img="{{asset('img/cars/legkovoy.webp')}}" ></x-service>
            <x-service title="Кросоверы и <br>Внедорожники" cats="Категория M1, М2" img="{{asset('img/cars/kross.webp')}}" ></x-service>
            <x-service title="Микроавтобусы <br>всех типов" cats="Категория M2, М3" img="{{asset('img/cars/furg.webp')}}" ></x-service>
            <x-service title="Грузовые <br>Автомобили" cats="Категория N1, N2" img="{{asset('img/cars/gruz.webp')}}" ></x-service>
        </div>
    </div>
</section>

<section id="how_work">
    <div class="container">
        <h2 class="section_h2">КАК ОФОРМИТЬ <span class="text_marker">СБКТС</span> за <span class="text_marker">5</span> простых шагов </h2>
        <div class="steps_wrapper">
            <x-step index="1" title="Оставьте заявку или свяжитесь с нами удобным способом"></x-step>
            <x-step index="2" title="Мы оценваем возможность установки и регистрации Вашего переоборудования"></x-step>
            <x-step index="3" title="Рассчитываем стоимость услуг в индивидуальном порядке"></x-step>
            <x-step index="4" title="Подготавливаем и оформляем необходимые документы"></x-step>
            <x-step index="5" title="Получение документа - <span class='text_marker'>СБКТС</span>"></x-step>
        </div>
    </div>
</section>

<section id="work_list">
    <div class="container">
        <h2 class="section_h2">Какие виды переоборудования мы помогаем <br>оформить в <span class="text_marker">ГИБДД</span></h2>

        <x-works-list-main></x-works-list-main>

    </div>
</section>

@endsection

