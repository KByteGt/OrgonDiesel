<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="{{route('index')}}#" class="logo mr-auto">
            <img src="{{asset('./img/logo_orgondiesel.png')}}" alt="Orgon Diesel Logo" class="img-logo">
        </a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('index')}}/#">@lang('Home')</a></li>
                <li class=""><a href="{{route('index')}}/#about">@lang('About')</a></li>

                <x-products-menu-list/>

                <li class=""><a href="{{route('index')}}/#contact">@lang('Contact')</a></li>
            </ul>
        </nav>
    </div>
</header>
