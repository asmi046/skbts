<div class="work_list">
    <div class="icon">
        <svg class="sprite_icon">
            <use xlink:href="#service_check"></use>
        </svg>
    </div>
    <div class="text text_styles">
        <h3>{{ $item->title }}</h3>
        <div class="services">
            {!! $item->services !!}
        </div>
        <a href="#" class="button">Заказать звонок</a>
    </div>
</div>
