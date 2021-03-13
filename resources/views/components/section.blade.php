
    <section id="{{ $id }}" {{ $attributes }}">
        <div class="container">

            <div class="section-title">
                <h2>{{ $tag }}</h2>
                <h3>{!! $title  !!}</h3>
                {{ $paragraph }}
            </div>

            {{ $slot }}
        </div>
    </section>
