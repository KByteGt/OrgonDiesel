<p class="card-text">También te puede interesar:</p>
<hr>
@foreach($families as $family)
    <a href="{{route($family->url)}}" class="btn-block">{{$family->name}}</a>
@endforeach
