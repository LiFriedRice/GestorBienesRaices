@extends('Layouts.header')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Detalles del Usuario</h1>
    <div class="card mb-4 shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">{{ $Usuarios->name }} {{ $Usuarios->apellido }}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/6522/6522581.png"
                        alt="Foto de Perfil" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Email:</strong> {{ $Usuarios->email }}</li>
                        <li class="list-group-item"><strong>Teléfono:</strong> {{ $Usuarios->telefono }}</li>
                        <li class="list-group-item"><strong>Dirección:</strong> {{ $Usuarios->direccion }}</li>
                        <li class="list-group-item"><strong>Tipo de Usuario:</strong> {{ $Usuarios->tipo_usuario }}</li>
                        <li class="list-group-item"><strong>Estado de Cuenta:</strong> {{ $Usuarios->estado_cuenta }}
                        </li>
                        <li class="list-group-item"><strong>Verificado:</strong>
                            {{ $Usuarios->verificado ? 'Sí' : 'No' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('PaginaPrincipal') }}" class="btn btn-secondary mt-3">Regresar</a>
</div>
<div class="Listadopro">
    <h1>Lista de Propiedades</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Tipo de Propiedad</th>
                <th>Área Construida</th>
                <th>Área Terraza</th>
                <th>Ubicación</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Propiedades as $propiedad)
                <tr>
                    <td>{{ $propiedad->titulo }}</td>
                    <td>{{ $propiedad->descripcion }}</td>
                    <td>{{ $propiedad->tipo_propiedad }}</td>
                    <td>{{ $propiedad->area_construida }} m²</td>
                    <td>{{ $propiedad->area_terraza }} m²</td>
                    <td>{{ $propiedad->ubicacion }}</td>
                    <td>{{ $propiedad->precio }}</td>
                    <td>{{ $propiedad->estado }}</td>
                    <td>
                        <a href="{{ route('propiedadshow', $propiedad->id_propiedad) }}" class="btn btn-info">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection