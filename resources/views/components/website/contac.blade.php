<x-section id="contact" class="contact" tag="contacto" title="<span>Contáctanos</span>">

    @if( session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {!! session('status') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-times"></i></button>
    </div>
    @endif

    <div class="col-lg-6">
        <div class="info-box mb-4">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Ubicaciones</h3>
            <p>Avenida Petapa, 50-40 Zona 12, Guatemala, Guatemala, C.A.</p>
            <p>Local 501, 50-40 Zona 12, Chimaltenango, Guatemala, C.A.</p>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="info-box mb-4">
                    <i class="fas fa-envelope"></i>
                    <h3>Escribenos</h3>
                    <p>info@orgondiesel.com</p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="info-box mb-4">
                    <i class="fas fa-phone"></i>
                    <h3>Llamanos</h3>
                    <p><strong>PBX:</strong> (+502) 2500-0200</p>
                    <p><strong>Whatsapp</strong> (+502) 5463-7035</p>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-6">
        <form action="{{ route('sendMailContactForm') }}" method="post" class="contact-form">
            @csrf
            <div class="col form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}"/>
                @error('name')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" value="{{ old('email') }}">
                @error('email')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto" value="{{ old('subject') }}">
                @error('subject')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col form-group">
                <input type="number" name="phone" id="phone" class="form-control" placeholder="Número de teléfono" value="{{ old('phone') }}">
                @error('phone')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="col form-group">
                <textarea name="content" id="content" placeholder="Mensaje">{{ old('content') }}</textarea>
                @error('content')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit">Enviar Mensaje</button>
            </div>
        </form>
    </div>

</x-section>
