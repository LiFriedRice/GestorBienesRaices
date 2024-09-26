<!DOCTYPE html>
<html lang="es">

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
	<!-- Required meta tags -->
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Bienes Raice</title>
	<!-- Favicon -->
	<link rel="icon" href="{{ asset('/images/favicon.png')}}" type="image/png" />
	<!-- Plugins -->
	<link href="{{ asset('/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- Loader -->
	<link href="{{ asset('/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('/css/icons.css') }}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/dark-header.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/dark-theme.css') }}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="sidebar-header">
					<div class="d-none d-lg-flex">
						<img src="{{ asset('/images/logo-icon.png')}}" class="logo-icon-2" alt="" />
					</div>
					<div>
						<h4 class="d-none d-lg-flex logo-text">Inmobiliaria</h4>
					</div>

				</div>
				<nav class="navbar navbar-expand-lg navbar-dark  mt-0 rounded "> <a class="navbar-brand"
						href="javascript:;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
						aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent2">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="javascript:;" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
										class='bx bx-user mr-4'></i> Propiedades</a>
								<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Casa</a>
									<a class="dropdown-item" href="javascript:;">Departamentos</a>
									<a class="dropdown-item" href="javascript:;">Terrenos</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="javascript:;" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
										class='bx bx-user mr-4'></i> Localizaciones</a>
								<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">La Paz</a>
									<a class="dropdown-item" href="javascript:;">Santa Cruz</a>
									<a class="dropdown-item" href="javascript:;">Beni</a>
									<a class="dropdown-item" href="javascript:;">Cochabamba</a>
									<a class="dropdown-item" href="javascript:;">Pando</a>
									<a class="dropdown-item" href="javascript:;">Chuquisaca</a>
									<a class="dropdown-item" href="javascript:;">Potosi</a>
									<a class="dropdown-item" href="javascript:;">Tarija</a>
									<a class="dropdown-item" href="javascript:;">Oruro</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="javascript:;" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
										class='bx bx-user mr-4'></i> Adquisicion</a>
								<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Venta</a>
									<a class="dropdown-item" href="javascript:;">Alquiler</a>
									<a class="dropdown-item" href="javascript:;">Anticretico</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="javascript:;" role="button"
									data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
										class='bx bx-user mr-4'></i> Vendedores</a>
								<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Usuario</a>
									<a class="dropdown-item" href="javascript:;">Agente inmobiliario</a>
								</div>
							</li>

						</ul>
						<form class="form-inline my-2 my-lg-0 nav-search">
							<div class="input-group nav-width">
								<input type="text" class="form-control" placeholder="Search"
									aria-label="Recipient's username">
								<div class="input-group-append border-left-0 ml-0">
									<button class="btn border-left-0" type="submit"><i class='bx bx-search'></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</nav>
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;"> <i
									class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
								href="javascript:;" data-toggle="dropdown"> <span class="msg-count">6</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">6 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar"
													alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-right">5
														sec
														ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
								data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0">Jessica Doe</p>
									</div>
									<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
								</div>
							</a>
						</li>

					</ul>
				</div>
			</nav>
		</header>
		<!-- Contenedor principal -->
		<div class="container mt-4">
			<div class="row">
				<!-- Perfil a la izquierda -->
				<div class="col-md-4">
					<div class="card">
						<img src="imagen/homero.png" class="card-img-top" alt="Foto de perfil"> <!-- Foto de perfil -->
						<div class="card-body text-center">
							<h5 class="card-title">Vendedor: Luis gay </h5>
							<button class="btn btn-primary btn-block">Contactar con el vendedor</button>
							<!-- Botón para contactar -->
						</div>
					</div>
				</div>

				<!-- Carrusel a la derecha -->
				<div class="col-md-8">
					<div class="card" style="background-color: #f0f0f0;">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0" style="font-size: 18px; color: #333;">
									PÁGINA DE ULTRA CASAS
								</h4>
							</div>
							<hr />
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel"
								data-interval="3000">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="imagen/casa 1.jpg" class="d-block"
											style="width: 100%; height: 350px; object-fit: cover;" alt="Casa 1">
									</div>
									<div class="carousel-item">
										<img src="imagen/casa 2.jpg" class="d-block"
											style="width: 100%; height: 350px; object-fit: cover;" alt="Casa 2">
									</div>
									<div class="carousel-item">
										<img src="imagen/casa 3.jpg" class="d-block"
											style="width: 100%; height: 350px; object-fit: cover;" alt="Casa 3">
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
									data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button"
									data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<!-- Formulario a la izquierda -->
					<div class="col-md-6">

						<div class="card">
							<div class="card-header">Características de las propiedades</div>
							<div class="card-body">
								<!-- Título -->
								<div class="form-group">
									<input class="form-control form-control-lg" type="text" placeholder="Título"
										name="titulo">
								</div>

								<!-- Descripción -->
								<div class="form-group">
									<textarea class="form-control" placeholder="Descripción"
										name="descripcion"></textarea>
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
									<input class="form-control" type="number" step="0.01"
										placeholder="Área construida (m²)" name="area_construida">
								</div>

								<!-- Área terraza -->
								<div class="form-group">
									<input class="form-control" type="number" step="0.01"
										placeholder="Área terraza (m²)" name="area_terraza">
								</div>

								<!-- Ubicación -->
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Ubicación" name="ubicacion">
								</div>

								<!-- Precio -->
								<div class="form-group">
									<input class="form-control" type="number" step="0.01" placeholder="Precio"
										name="precio">
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
									<input class="form-control" type="number" placeholder="Dormitorios"
										name="dormitorios" min="0">
								</div>

								<!-- Baños -->
								<div class="form-group">
									<input class="form-control" type="number" placeholder="Baños" name="baños" min="0">
								</div>

								<!-- Parqueos -->
								<div class="form-group">
									<input class="form-control" type="number" placeholder="Parqueos" name="parqueos"
										min="0">
								</div>

								<!-- Pisos -->
								<div class="form-group">
									<input class="form-control" type="number" placeholder="Pisos" name="pisos" min="0">
								</div>

								<!-- Geolocalización -->
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Geolocalización"
										name="geolocalizacion">
								</div>

								<!-- Tipo de suelo -->
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Tipo de suelo"
										name="tipo_suelo">
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

								<!-- Fecha de publicación -->
								<div class="form-group">
									<input class="form-control" type="datetime-local" name="fecha_publicacion">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javascript:;" class="back-to-top"><i
				class='bx bxs-up-arrow-alt'></i></a>
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
</body>

</html>