

<x-section id="contact" class="contact" tag="contacto" title="<span>Contáctanos</span>">

    <div class="row">
        <div class="col-lg-6">
            <div class="info-box mb-4">
                <h3>Ciudad de Guatemala</h3>
                <p>Avenida Petapa, 50-40 Zona 12, Guatemala, Guatemala, C.A.</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="info-box mb-4">
                        <i class="fas fa-envelope"></i>
                        <p>info@orgondiesel.com</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box mb-4">
                        <i class="fas fa-phone"></i>
                        <p><strong>PBX:</strong> (+502) 2500-0200</p>
                        <p><strong>Whatsapp</strong> (+502) 5463-7035</p>
                    </div>
                </div>
            </div>

            <div class="info-box mb-4">
                <h3>Chimaltenango</h3>
                <p>Chimaltenango, Guatemala, C.A.</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="info-box mb-4">
                        <i class="fas fa-envelope"></i>
                        <p>info@orgondiesel.com</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box mb-4">
                        <i class="fas fa-phone"></i>
                        <p><strong>PBX:</strong> (+502) 2500-0200</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
        <form action="{{ route('sendMailContactForm') }}" method="post" class="contact-form">

            @if( session('status'))
                <x-alert class="alert-success">
                    {!! session('status') !!}
                </x-alert>
            @endif

            @csrf
            <div class="col form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}" required/>
                @error('name')
                <span class="invalid" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="col form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" value="{{ old('email') }}" required>
                @error('email')
                <span class="invalid" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="col form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Asunto" value="{{ old('subject') }}" required>
                @error('subject')
                <span class="invalid" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="col form-group">
                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Número de teléfono" value="{{ old('phone') }}" required>
                @error('phone')
                <span class="invalid" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="col form-group">
                <textarea name="content" id="content" placeholder="Mensaje" required>{{ old('content') }}</textarea>
                @error('content')
                <span class="invalid" role="alert">{{ $message }}</span>
                @enderror
            </div>
            <div class="text-center">
                <button type="submit">Enviar Mensaje</button>
            </div>
        </form>
    </div>
    </div>

</x-section>
