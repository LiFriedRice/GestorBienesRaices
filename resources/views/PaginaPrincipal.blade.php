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
				<nav class="navbar navbar-expand-lg navbar-dark  mt-0 rounded "> <a class="navbar-brand" href="javascript:;"></a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent2">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i> Propiedades</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Casa</a>
												<a class="dropdown-item" href="javascript:;">Departamentos</a>
												<a class="dropdown-item" href="javascript:;">Terrenos</a>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i> Localizaciones</a>
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
											<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i> Adquisicion</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Venta</a>
												<a class="dropdown-item" href="javascript:;">Alquiler</a>
												<a class="dropdown-item" href="javascript:;">Anticretico</a>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class='bx bx-user mr-4'></i> Vendedores</a>
											<div class="dropdown-menu"> <a class="dropdown-item" href="javascript:;">Usuario</a>
												<a class="dropdown-item" href="javascript:;">Agente inmobiliario</a>
											</div>
										</li>
				
									</ul>
									<form class="form-inline my-2 my-lg-0 nav-search">
										<div class="input-group nav-width">
											<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username">
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
		<!--end header-->
		<!--navigation-->
		<!--end navigation-->
		<img src="{{ asset('/images/Portada.jpg') }}" alt="" width="100%">
		<!--page-wrapper-->
		<div class="page-wrapper">
			<h2>Agentes inmobiliarios</h2>
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--end row-->
					<div class="row">
						<div class="col-lg-3">
							<div class="card radius-15 bg-warning">
								<div class="card-body">
									<div class="media align-items-center">
										<img src="https://via.placeholder.com/110x110" width="80" height="80"
											class="rounded-circle p-1 border bg-white" alt="" />
										<div class="media-body ml-3">
											<h5 class="mb-0">Pauline I. Bird</h5>
											<p class="mb-0">Webdeveloper</p>
											<div class="list-inline contacts-social mt-2"> <a href="javascript:;"
													class="list-inline-item text-facebook"><i
														class='bx bxl-facebook'></i></a>
												<a href="javascript:;" class="list-inline-item text-twitter"><i
														class='bx bxl-twitter'></i></a>
												<a href="javascript:;" class="list-inline-item"><i
														class='bx bxs-phone'></i></a>
												<a href="javascript:;" class="list-inline-item text-skype"><i
														class='bx bxl-skype'></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--end row-->
				</div>
			</div>
			<h2>Recomendados</h2>
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--end row-->
					<div class="row">
						<div class="col-lg-3">
							<div class="card radius-15 bg-primary">
								<div class="card-body text-center">
									<img src="https://via.placeholder.com/110x110" width="100%" height="200"
										class=" p-1 border bg-white" alt="" />
									<h5 class="mb-0 mt-4 text-white">Pauline I. Bird</h5>
									<p class="mb-0 text-white">Webdeveloper</p>
									<div class="list-inline contacts-social mt-3"> <a href="javascript:;"
											class="list-inline-item text-facebook"><i class='bx bxl-facebook'></i></a>
										<a href="javascript:;" class="list-inline-item text-twitter"><i
												class='bx bxl-twitter'></i></a>
										<a href="javascript:;" class="list-inline-item"><i class='bx bxs-phone'></i></a>
										<a href="javascript:;" class="list-inline-item text-skype"><i
												class='bx bxl-skype'></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--end row-->
				</div>
			</div>
			<h2>Localizaciones</h2>
			<div class="containerrow row">
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-info">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-bookmark-alt'></i>
									</div>
									<p class="mb-0 text-white">La paz</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-wall">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-user'></i>
									</div>
									<p class="mb-0 text-white">Santa Cruz</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-rose">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-cloud-download'></i>
									</div>
									<p class="mb-0 text-white">Beni</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-info">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-bookmark-alt'></i>
									</div>
									<p class="mb-0 text-white">Cochabamba</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-wall">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-user'></i>
									</div>
									<p class="mb-0 text-white">Pando</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-rose">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-cloud-download'></i>
									</div>
									<p class="mb-0 text-white">Oruro</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-info">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto rounded-circle bg-white"><i class='bx bx-bookmark-alt'></i>
									</div>
									<p class="mb-0 text-white">Potosi</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2  custom-width">
							<div class="card radius-15 bg-wall">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-user'></i>
									</div>
									<p class="mb-0 text-white">Chuquisaca</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-2 custom-width">
							<div class="card radius-15 bg-rose">
								<div class="card-body text-center">
									<div class="widgets-icons mx-auto bg-white rounded-circle"><i class='bx bx-cloud-download'></i>
									</div>
									<p class="mb-0 text-white">Tarija</p>
								</div>
							</div>
						</div>
						
					</div>
			<!--end page-content-wrapper-->
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