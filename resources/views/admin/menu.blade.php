<x-card title="{{__('Menu')}}">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{route('products.index')}}" class="nav-link">Productos</a>
        </li>
        <li class="nav-item">
            <a href="{{route('families.index')}}" class="nav-link">Familias</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">Categorias</a>
        </li>
    </ul>
</x-card>
