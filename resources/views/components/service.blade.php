@props([
    'title'=>"Заголовок блока",
    'cats'=>"ссылка",
    'img'=>"vk_icon"
])

<div class="servic">
    <div class="text">
        <h3>{!! $title !!}</h3>
        <p class="cats">{{ $cats }}</p>
        <a href="#showModal" class="button">Заказать</a>
    </div>
    <div class="img">
        <img src="{{ $img }}" alt="{{ $title }}">
    </div>
</div>
