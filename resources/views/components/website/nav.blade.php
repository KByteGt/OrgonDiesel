<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="{{route('index')}}#" class="logo mr-auto">
            <img src="{{asset('./img/logo_orgondiesel.png')}}" alt="Orgon Diesel Logo" class="img-logo">
        </a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active">
                    <a href="{{route('index')}}/#">@lang('Home')</a>
                </li>
                <li class=""><a href="{{route('index')}}/#about">@lang('About')</a></li>
                <li class="drop-down">
                    <a href="{{route('index')}}/#products">@lang('Products')</a>
                    <ul>
                        <li><a href="">@lang('Diesel injection')</a></li>
                        <li><a href="">@lang('Turbos')</a></li>
                        <li class="drop-down"><a href="">@lang('Lubricants')</a>
                            <ul>
                                <li><a href="">@lang('Moto')</a></li>
                                <li><a href="">@lang('Vehiculos livianos')</a></li>
                                <li><a href="">@lang('Vehiculos semi pesados y pesados')</a></li>
                                <li><a href="">@lang('Refrigerantes')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=""><a href="{{route('index')}}/#contact">@lang('Contact')</a></li>
            </ul>
        </nav>
    </div>
</header>
