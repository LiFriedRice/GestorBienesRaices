@extends('Layouts.app')
@section('content')
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
				@foreach($Propiedades as $Propiedad)
					<div class="col-lg-3">
						<div class="card radius-15 bg-primary">
							<div class="card-body text-center">
								@if($Propiedad->fotosVideos->isNotEmpty())
									<img src="{{ asset($Propiedad->fotosVideos->first()->url_media) }}" width="100%"
										height="200" class="p-1 border bg-white" alt="" />
								@else
									<img src="https://via.placeholder.com/110x110" width="100%" height="200"
										class="p-1 border bg-white" alt="" />
								@endif
								<h5 class="mb-0 mt-4 text-white">{{ $Propiedad->titulo }}</h5>
								<p class="mb-0 text-white">{{ $Propiedad->descripcion }}</p>
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
				@endforeach
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
<!--Start Back To Top Button--> <a href="javascript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<!--footer -->
<div class="footer">
	<p class="mb-0">Syndash @2020 | Developed By : <a href="javascript:;">codervent</a>
	</p>
</div>
<!-- end footer -->
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
@endsection