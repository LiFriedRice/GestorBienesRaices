@extends('Layouts.header')
@section('content')
<div class="formulario">
    <div class="row justify-content-center">
        <!-- Formulario a la izquierda -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header text-center bg-primary text-white">
                    <h5>Características de las propiedades</h5>
                </div>
                <div class="card-body">
                    <!-- Formulario para guardar la propiedad -->
                    <form action="{{ route('propiedades.store') }}" method="POST">
                        @csrf

                        <!-- Título -->
                        <div class="form-group mb-3">
                            <input class="form-control form-control-lg" type="text" placeholder="Título" name="titulo" required>
                        </div>

                        <!-- Descripción -->
                        <div class="form-group mb-3">
                            <textarea class="form-control" placeholder="Descripción" name="descripcion" rows="3" required></textarea>
                        </div>

                        <!-- Tipo de propiedad y Estado -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <select class="form-control" name="tipo_propiedad" id="tipo_propiedad" required>
                                    <option value="No definido">Tipo de propiedad</option>
                                    <option value="comercial">Comercial</option>
                                    <option value="residencial">Residencial</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" name="estado" id="estado" required>
                                    <option value="">Estado</option>
                                    <option value="disponible">Disponible</option>
                                    <option value="en negociacion">En negociación</option>
                                    <option value="vendida">Vendida</option>
                                    <option value="alquilada">Alquilada</option>
                                </select>
                            </div>
                        </div>

                        <!-- Área construida y área terraza -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <input class="form-control" type="number" step="0.01" placeholder="Área construida (m²)" name="area_construida" required>
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" step="0.01" placeholder="Área terraza (m²)" name="area_terraza" required>
                            </div>
                        </div>

                        <!-- Ubicación y Precio -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <input class="form-control" type="text" placeholder="Ubicación" name="ubicacion" required>
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" step="0.01" placeholder="Precio" name="precio" required>
                            </div>
                        </div>

                        <!-- Año de construcción, Dormitorios, Baños -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <input class="form-control" type="number" placeholder="Año de construcción" name="año_construccion" required>
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" placeholder="Dormitorios" name="dormitorios" min="0" required>
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" placeholder="Baños" name="baños" min="0" required>
                            </div>
                        </div>

                        <!-- Parqueos, Pisos -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <input class="form-control" type="number" placeholder="Parqueos" name="parqueos" min="0" required>
                            </div>
                            <div class="col">
                                <input class="form-control" type="number" placeholder="Pisos" name="pisos" min="0" required>
                            </div>
                        </div>

                        <!-- Tipo de suelo y Servicios comunitarios -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <input class="form-control" type="text" placeholder="Tipo de suelo" name="tipo_suelo" required>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" placeholder="Servicios comunitarios" name="servicios_comunitarios" required>
                            </div>
                        </div>

                        <!-- Gastos comunes, Estado del inmueble -->
                        <div class="form-row mb-3">
                            <div class="col">
                                <input class="form-control" type="number" step="0.01" placeholder="Gastos comunes" name="gastos_comunes" required>
                                <div class="mt-3">
                                <select class="form-control" name="tipo_terreno" id="tipo_terreno" required>
                                    <option value="No definido">Tipo de terreno</option>
                                    <option value="casa">Casa</option>
                                    <option value="departamento">Departamento</option>
                                    <option value="terreno">Terreno</option>
                                </select>
                                <select class="form-control mt-3" name="entrega" id="entrega" required>
                                <option value="No definido">Tipo de entrega</option>
                                <option value="inmediata">Inmediata</option>
                                <option value="otra_fecha">Otra fecha</option>
                            </select>
                            </div>
                            </div>
                            <div class="col">
                                <select class="form-control" name="estado_inmueble" id="estado_inmueble" required>
                                    <option value="No definido">Estado del inmueble</option>
                                    <option value="a estrenar">A estrenar</option>
                                    <option value="usado">Usado</option>
                                </select>
                                <select class="form-control mt-3" name="tipo_venta" id="tipo_venta" required>
                                    <option value="No definido">Tipo de venta</option>
                                    <option value="alquiler">Alquiler</option>
                                    <option value="venta">Venta</option>
                                </select>
                                <input class="form-control mt-3" type="text" placeholder="Link de imagen" name="linkmedia" required>
                            </div>
                            
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Guardar Propiedad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection