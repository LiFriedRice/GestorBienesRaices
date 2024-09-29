@extends('Layouts.header')
@section('content')

<!-- Advanced Filter Section -->
<div class="containerfilter mt-5 ">
    <form action="/search" method="GET">
        <div class="row">
            <!-- Left Column Filters (Aligned to the left) -->
            <div class="col-md-3">
                <!-- Property Type -->
                <div class="form-group">
                    <label for="tipo_propiedad">Tipo de Propiedad</label>
                    <select class="form-control" id="tipo_propiedad" name="tipo_propiedad">
                        <option value="recidencia">residencia</option>
                        <option value="comercial">comercial</option>
                    </select>
                </div>
                <!-- Location -->
                <div class="form-group">
                    <label for="localizacion">Localizacion</label>
                    <select class="form-control" id="localizacion" name="localizacion">
                        <option value="lapaz">La Paz</option>
                        <option value="santacruz">Santa Cruz</option>
                        <option value="beni">Beni</option>
                        <option value="cochabamba">Cochabamba</option>
                        <option value="tarija">Tarija</option>
                        <option value="pando">Pando</option>
                        <option value="oruro">Oruro</option>
                        <option value="potosi">Potosi</option>
                        <option value="chuquisaca">Chuquisaca</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pisos">Pisos</label>
                    <select class="form-control" id="pisos" name="pisos">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <!-- Price Range -->
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" id="precioMin" name="precioMin"
                        placeholder="Precio minino">
                    <input type="number" class="form-control mt-2" id="precioMax" name="precioMax"
                        placeholder="Precio maximo">
                </div>
            </div>

            <!-- Right Column Filters -->
            <div class="col-md-3">
                <!-- Number of Bedrooms -->
                <div class="form-group">
                    <label for="baños">Baños</label>
                    <select class="form-control" id="baños" name="baños">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                </div>
                <!-- Number of Bathrooms -->
                <div class="form-group">
                    <label for="dormitorios">Dormitorios</label>
                    <select class="form-control" id="dormitorios" name="dormitorios">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="servicio_comunitario">Servicio comunitario</label>
                    <select class="form-control" id="servicio_comunitario" name="servicio_comunitario">
                        <option value="piscina, gimnasio">piscina, gimnasio</option>
                        <option value="seguridad 24h, parque">seguridad 24h, parque</option>
                    </select>
                </div>
                <!-- Property Size -->
                <div class="form-group">
                    <label for="area_contruida">Area construida</label>
                    <input type="number" class="form-control" id="areaMin" name="areaMin" placeholder="Tamaño minimo">
                    <input type="number" class="form-control mt-2" id="areaMax" name="areaMax"
                        placeholder="Tamaño maximo">
                </div>
            </div>

            <!-- Additional Filters -->
            <div class="col-md-3">
                <!-- Acquisition Type -->
                <div class="form-group">
                    <label for="tipo_adquisicion">Tipo de adquisicion</label>
                    <select class="form-control" id="tipo_adquisicion" name="tipo_adquisicion">
                        <option value="venta">Venta</option>
                        <option value="alquiler">Alquiler</option>
                        <option value="anticretico">Anticretico</option>
                    </select>
                </div>
                <!-- Garage -->
                <div class="form-group">
                    <label for="parqueo">Parqueo</label>
                    <select class="form-control" id="parqueo" name="parqueo">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="estado_inmueble">Estado inmueble</label>
                    <select class="form-control" id="estado_inmueble" name="estado_inmueble">
                        <option value="Usado">Usado</option>
                        <option value="A estrenar">A estrenar</option>
                    </select>
                </div>
                <!-- Year Built -->
                <div class="form-group">
                    <label for="año_construccion">Año de construccion</label>
                    <input type="number" class="form-control" id="año_construccion" name="año_construccion"
                        placeholder="e.g., 2020">
                </div>
            </div>

            <!-- Search Button -->
            <div class="col-md-3 text-center">
                <button type="submit" class="btn btn-primary mt-4">Search</button>
            </div>
        </div>
    </form>
</div>
<div class="page-content-wrapper">
    <div class="page-content">
        <!--end row-->
        <div class="row">
            @foreach($propiedades as $propiedad)
                <div class="col-lg-3">
                    <div class="card radius-15 bg-primary">
                        <div class="card-body text-center">
                            @if($propiedad->fotosVideos->isNotEmpty())
                                <img src="{{ asset($propiedad->fotosVideos->first()->url_media) }}" width="100%" height="200"
                                    class="p-1 border bg-white" alt="" />
                            @else
                                <img src="https://via.placeholder.com/110x110" width="100%" height="200"
                                    class="p-1 border bg-white" alt="" />
                            @endif
                            <h5 class="mb-0 mt-4 text-white">{{ $propiedad->titulo }}</h5>
                            <p class="mb-0 text-white">{{ $propiedad->descripcion }}</p>
                            <div class="list-inline contacts-social mt-3"> <a href="javascript:;"
                                    class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
                                <a href="javascript:;" class="list-inline-item text-twitter"><i
                                        class='bx bxl-twitter'></i></a>
                                <a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
                                <a href="javascript:;" class="list-inline-item text-skype"><i class='bx bxl-skype'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--end row-->
    </div>
</div>

<!--end page-wrapper-->
<!--start overlay-->
<div class="overlay toggle-btn-mobile"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javascript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<!--footer -->
<div class="footer">
    <p class="mb-0">Syndash @2020 | Developed By : <a href="javascript:;">codervent</a>
    </p>
</div>
<!-- end footer -->
</div>
<!-- end wrapper -->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
        <hr />
        <h6 class="mb-0">Theme Styles</h6>
        <hr />
        <div class="d-flex align-items-center justify-content-between">
            <div class="custom-control custom-radio">
                <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="darkmode">Dark Mode</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
                <label class="custom-control-label" for="lightmode">Light Mode</label>
            </div>
        </div>
        <hr />
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="DarkHeader">
            <label class="custom-control-label" for="DarkHeader">Dark Header</label>
        </div>
        <hr />
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="DarkMenu">
            <label class="custom-control-label" for="DarkMenu">Dark Menu</label>
        </div>
        <hr />
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="ColorLessIcons">
            <label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
        </div>
    </div>
</div>
<!--end switcher-->
<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('/js/jquery.min.js')}}"></script>
<script src="{{ asset('/js/popper.min.js')}}"></script>
<script src="{{ asset('/js/bootstrap.min.js')}}"></script>
<!--plugins-->
<script src="{{ asset('/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{ asset('/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!-- App JS -->
<script src="{{ asset('/js/app.js')}}"></script>