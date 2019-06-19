<style>
.header_nav {
    z-index: 0;
}
</style>
<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                    <div>
                                    <img style="width:109px" src="images/logo.png">
                                    </div>
                                    <div class="logo">
                                    <a href="#"> Dr mseddi Med<span></span></a>	
									</div>
									<div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto"><!-- Services 
										<div class="header_top_nav">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="#">Help Desk</a></li>
												<li><a href="#">Emergency Services</a></li>
												<li><a href="#">Appointment</a></li>
											</ul>
										</div>-->
										@guest
										<div class="row" class="auth">
										<div class="col-sm-6">
										<h5><a class="nav-link"  style="font-weight: 600;" class="pull-right" href="{{ route('patient.login') }}">Connexion</a></h5>
										</div>
										@if (Route::has('register'))
										<div class="col-sm-6">
										<h5><a class="nav-link" style="font-weight: 600;" class="pull-left" href="{{ route('patient.register') }}">s'identifier</a><h5>
										</div>
										@endif
										</div>
										@else
										<div class="dropdown"style="min-width: 140px;background: none;">
										<button class="btn  dropdown-toggle" type="button" id="dropdownMenu2" style=" min-width: 140px;background: none;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<a style=" font-size: 14px;"><i class="fa fa-user "style=" background: gray; margin-right: 4%; color: white; padding: 14px;border: solid gray 2px; border-radius: 52% !important;"></i></a> {{ Auth::user()->name }}
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button"><a href="/patient">Profil</a></button>
											<button class="dropdown-item" type="button"><a href="/modifPatient">Modifier</a></button>
											<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											{{ __('Deconexion') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
											</form>
										</div>
										</div>
							@endguest

									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li class="active"><a href="/">Acceuil </a></li>
													<li><a href="/patient">Espace Patient</a></li>
													<li><a href="/medecin">Espace Medecin</a></li>
													<li><a href="/secretaire">Espace Secretaire</a></li>
												</ul>
											</nav>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>
