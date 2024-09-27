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
					data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
					aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent2">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i>
								Propiedades</a>
							<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Casa</a>
								<a class="dropdown-item" href="javascript:;">Departamentos</a>
								<a class="dropdown-item" href="javascript:;">Terrenos</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i>
								Localizaciones</a>
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
							<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i>
								Adquisicion</a>
							<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Venta</a>
								<a class="dropdown-item" href="javascript:;">Alquiler</a>
								<a class="dropdown-item" href="javascript:;">Anticretico</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i>
								Vendedores</a>
							<div class="dropdown-menu"> <a class="dropdown-item"
									href="{{ route('Publicacion') }}">Usuario</a>
								<a class="dropdown-item" href="{{ route('Listado')}}">Agente inmobiliario</a>
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
						<a class=" dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
							data-toggle="dropdown">
							<div class="media user-box align-items-center">
								<div class="media-body user-info">

									<a class="nav-link dropdown-toggle" href="javascript:;" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
											class='bx bx-user'></i>
										Usuario</a>
									<div class="dropdown-menu"> <a class="dropdown-item" href="{{ route('IniciarSesion') }}">Iniciar Sesion</a>
										<a class="dropdown-item" href="{{ route('Registrarse') }}">Registrarse</a>
									</div>


								</div>
								<img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
							</div>
						</a>
					</li>

				</ul>
			</div>
		</nav>
	</header>
	@yield('content')	
</body>