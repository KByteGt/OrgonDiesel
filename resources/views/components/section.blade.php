
    <section id="{{ $id }}" {{ $attributes }}">
        <div class="container">

            <div class="section-title">
                <h2>{{ $id }}</h2>
                <h3>{!! $title  !!}</h3>
                {{ $paragraph }}
            </div>

            <div class="row">
                {{ $slot }}
            </div>
        </div>
    </section>
