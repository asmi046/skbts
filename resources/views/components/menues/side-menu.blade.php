<div id="main_side_menue" class="side_menue_wrapper">
    <div class="shadow"></div>

    <div class="side_menue">
        <a class="logo" href="{{ route('home')}}">
            <img src="{{asset('img/logo.svg')}}" alt="">
        </a>
        <ul>
            <x-menu-items></x-menu-items>
        </ul>
    </div>
</div>

<div class="show_menue_button">
    <div class="icon-menu toggle_menu" aria-label="Бургер меню">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
