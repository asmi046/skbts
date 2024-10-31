@props([
    'title'=>"Преимущество 1",
    'icon'=>"vk_icon"
])

<div class="adv">
    <div class="icon">
        <svg class="sprite_icon">
            <use xlink:href="#{{ $icon }}"></use>
        </svg>
    </div>
    <h3>
        {!! $title !!}
    </h3>
</div>
