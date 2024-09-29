@extends('Layouts.header')
@section('content')
<div class="formulario ">
    <div class="row">
        <!-- Formulario a la izquierda -->
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">Características de las propiedades</div>
                <div class="card-body ">
                    <!-- Formulario para guardar la propiedad -->
                    <form action="{{ route('propiedades.store') }}" method="POST">
                        @csrf
                        <!-- Título -->
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Título" name="titulo">
                        </div>

                        <!-- Descripción -->
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Descripción" name="descripcion"></textarea>
                        </div>

                        <!-- Tipo de propiedad -->
                        <div class="form-group">
                            <select class="form-control" name="tipo_propiedad">
                                <option value="comercial">Comercial</option>
                                <option value="residencial">Residencial</option>
                            </select>
                        </div>

                        <!-- Área construida -->
                        <div class="form-group">
                            <input class="form-control" type="number" step="0.01" placeholder="Área construida (m²)"
                                name="area_construida">
                        </div>

                        <!-- Área terraza -->
                        <div class="form-group">
                            <input class="form-control" type="number" step="0.01" placeholder="Área terraza (m²)"
                                name="area_terraza">
                        </div>

                        <!-- Ubicación -->
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Ubicación" name="ubicacion">
                        </div>

                        <!-- Precio -->
                        <div class="form-group">
                            <input class="form-control" type="number" step="0.01" placeholder="Precio" name="precio">
                        </div>

                        <!-- Estado -->
                        <div class="form-group">
                            <select class="form-control" name="estado">
                                <option value="disponible">Disponible</option>
                                <option value="en negociacion">En negociación</option>
                                <option value="vendida">Vendida</option>
                                <option value="alquilada">Alquilada</option>
                            </select>
                        </div>

                        <!-- Año de construcción -->
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Año de construcción"
                                name="año_construccion">
                        </div>

                        <!-- Dormitorios -->
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Dormitorios" name="dormitorios" min="0">
                        </div>

                        <!-- Baños -->
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Baños" name="baños" min="0">
                        </div>

                        <!-- Parqueos -->
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Parqueos" name="parqueos" min="0">
                        </div>

                        <!-- Pisos -->
                        <div class="form-group">
                            <input class="form-control" type="number" placeholder="Pisos" name="pisos" min="0">
                        </div>

                      
                        <!-- Tipo de suelo -->
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Tipo de suelo" name="tipo_suelo">
                        </div>

                        <!-- Servicios comunitarios -->
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Servicios comunitarios"
                                name="servicios_comunitarios">
                        </div>

                        <!-- Gastos comunes -->
                        <div class="form-group">
                            <input class="form-control" type="number" step="0.01" placeholder="Gastos comunes"
                                name="gastos_comunes">
                        </div>

                        <!-- Estado del inmueble -->
                        <div class="form-group">
                            <select class="form-control" name="estado_inmueble">
                                <option value="a estrenar">A estrenar</option>
                                <option value="usado">Usado</option>
                            </select>
                        </div>

                        <!-- Entrega -->
                        <div class="form-group">
                            <select class="form-control" name="entrega">
                                <option value="inmediata">Inmediata</option>
                                <option value="otra_fecha">Otra fecha</option>
                            </select>
                        </div>

                      
                        <button type="submit" class="btn btn-primary">Guardar Propiedad</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection