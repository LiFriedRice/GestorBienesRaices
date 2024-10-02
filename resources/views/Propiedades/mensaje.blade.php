@extends('Layouts.header')

@section('content')
<!-- Sección de Contacto -->
<div class="container mt-5">
    <h2 class="container mt-5">Contactar con el Comprador</h2>
    @if(Auth::check())
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form id="contactForm" method="POST" action="{{ route('enviar.mensaje') }}">
            @csrf

            <!-- Propiedad destinatario -->
            <div class="mb-3">
                <label for="destinatario" class="form-label">Destinatario</label>
                <input type="text" class="form-control" id="destinatario" value="{{ $usuario->name }}" readonly>
            </div>

            <input type="hidden" name="destinatarioId" value="{{ $usuario->id }}">
            <input type="hidden" name="propiedadId"
                value="{{ $Propiedad->id_propiedad }}">

            <div class="mb-3">
                <label for="propiedad" class="form-label">Propiedad</label>
                <input type="text" class="form-control" id="propiedad"
                    value="{{ $Propiedad->titulo}}" readonly>
            </div>

            <div class="mb-3">
                <label for="mensajePredeterminado" class="form-label">Mensaje predeterminado</label>
                <input type="text" class="form-control" id="mensajePredeterminado" value="Estoy interesado en la propiedad"
                    readonly>
            </div>

            <div class="mb-3">
                <label for="mensajePersonalizado" class="form-label">Mensaje personalizado</label>
                <textarea name="mensajePersonalizado" class="form-control" id="mensajePersonalizado" rows="3"
                    placeholder="Escribe tu mensaje aquí..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @else
        <p>Debes iniciar sesión para enviar un mensaje. <a href="{{ route('login') }}">Inicia sesión, </a><a href="{{ route('register') }}">Registrate</a>.</p>
    @endif

    <!-- Modal de éxito -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Éxito</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    El mensaje se envió con éxito.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.getElementById('successModal'));
                myModal.show();
            });
        </script>
    @endif
</div>
<!-- Bootstrap CSS -->

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

@endsection