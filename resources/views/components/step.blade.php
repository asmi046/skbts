@props([
    'title'=>"Заголовок блока",
    'index'=>"1"
])

<div class="step">
    <div class="index">
        {{$index}}
    </div>
    <div class="text">
        {!! $title !!}
    </div>
</div>
