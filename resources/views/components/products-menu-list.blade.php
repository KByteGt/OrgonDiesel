<li class="drop-down">
    <a href="{{route('index')}}/#products">@lang('Products')</a>
    <ul>
        {{--<li><a href="{{route('index')}}#products">@lang('Diesel injection')</a></li>--}}

        @if(count($turbosList) > 0)
        <li class="drop-down"><a href="{{ route('turbos') }}">@lang('Turbos')</a>
            <ul>
                @foreach($turbosList as $menu)
                    <li><a href="{{ route('turbos.category', $menu->id) }}">{{$menu->name}}</a></li>
                @endforeach
            </ul>
        </li>
        @else
            <li><a href="#products">@lang('Turbos')</a></li>
        @endif

        @if(count($lubricantsList) > 0)
            <li class="drop-down"><a href="{{ route('lubricants') }}">@lang('Lubricants')</a>
                <ul>
                    @foreach($lubricantsList as $menu)
                        <li><a href="{{ route('lubricants.category', $menu->id) }}">{{$menu->name}}</a></li>
                    @endforeach
                </ul>
            </li>
        @else
            <li><a href="#products">@lang('Lubricants')</a></li>
        @endif

    </ul>
</li>
