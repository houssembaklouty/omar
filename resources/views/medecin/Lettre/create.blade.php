<!DOCTYPE html>
<html lang="en">
<head>
<title>Lettre</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../styles/bootstrap4/bootstrap.min.css">
<link href="../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../styles/contact.css">
<link rel="stylesheet" type="text/css" href="../../styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Menu -->

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../../images/contact.jpg" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									 <div>
                                    <img style="width:109px" src="../../images/logo.png">
                                    </div>
                                    <div class="logo">
                                    <a href="#"> Dr mseddi Med<span></span></a>	
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
												 <li ><a href="/secretaire">Espace Secretaire</a></li>
                                                      <li>
                                                    	<a href="{{ route('Patient.index') }}">
                                                    		liste des patients
                                                    	</a>
                                                	</li>
                                                       <li><a href="{{ route('Certificat.index') }}">liste des certificats</a></li>
													<li><a href="{{ route('Consultation.index') }}">liste des consultations</a></li>
                                                    <li><a href="{{ route('Lettre.index') }}">liste des lettres</a></li>
                                                    <li><a href="{{ route('Ordonance.index') }}">liste des ordonances</a></li>
						
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

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Espace medecin</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	</div>
    

        

   <div class="contact">
		<div class="container">
            
          
		<center><h6 style="color:black;">Ajouter  une  nouvelle lettre</h6></center>
                        
<form method="post" action="{{route('Lettre.store')}}">
    {{csrf_field()}}
     <div class="form-group">
	  {!! Form::Label('item :') !!}
	  <select class="form-control" name="patient_id">
	    @foreach($patients as $item)
	      <option value="{{$item->id}}">{{$item->nom}} {{$item->prenom }}</option>
	    @endforeach
	  </select>
	</div>
    <div class="form-group"> 
      <label for="full_name_id" class="control-label">etat sante du patient</label>
      <input type="text" class="form-control" id="full_name_id" name="etatSant" placeholder="">
    </div>

    <div class="form-group"> 
      <label for="street1_id" class="control-label">nom du confrere</label>
      <input type="text" class="form-control" id="street1_id" name="nomConf" placeholder="">
    </div>

    <div class="form-group">
      <label for="city_id" class="control-label">Prenom du confrere</label>
      <input type="text" class="form-control" id="city_id" name="prenomConf" placeholder="">
    </div>

    <div class="form-group"> 
      <label for="zip_id" class="control-label">Specialité du Confrere</label>
      <input type="text" class="form-control" id="zip_id" name="SpecConf" placeholder="">
    </div>
     <div class="form-group"> 
      <label for="zip_id" class="control-label">Commentaire</label>
      <input type="text" class="form-control" id="zip_id" name="comment" placeholder="">
    </div>
    
    

		<div class="form-group"> <!-- Submit Button -->
		<center>
		<button style='background: #32c69a;'  type="submit" class="btn"><a style="color:white;" >Valider</a></button>
</center>
    </div>

    </form>
            
            </div></div>
    
    
	
	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../../images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">Santé<span>+</span></a>	
							</div>
							<div class="footer_about_text"></div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script>  <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						</div>
					</div>
					
			<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title">Contact rapide</div>
							<div class="footer_contact_form_container">
								<form action="#" class="footer_contact_form" id="footer_contact_form">
									<div class="d-flex flex-xl-row flex-column align-items-center justify-content-between">
										<input type="text" class="footer_contact_input" placeholder="Nom" required="required">
										<input type="email" class="footer_contact_input" placeholder="E-mail" required="required">
									</div>
									<textarea class="footer_contact_input footer_contact_textarea" placeholder="Message" required="required"></textarea>
									<button class="footer_contact_button">Envoyer message</button>
								</form>
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">heures d'ouverture 
							</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>lundi – mardi</div>
									<div class="ml-auto">8.00 – 19.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>vendredi</div>
									<div class="ml-auto">8.00 - 18.30</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Samedi</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Dimanche</div>
									<div class="ml-auto">9.30 – 15.00</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li class="active"><a href="index.html">Acceuil</a></li>
									<li><a href="about.html">A propos de nous</a></li>
									<li><a href="services.html">Services</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="#">Rendez-vous</a></li>
								</ul>
							</nav>
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>+216 74 747 474</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


<script src="../../js/jquery-3.3.1.min.js"></script>
<script src="../../styles/bootstrap4/popper.js"></script>
<script src="../../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../plugins/easing/easing.js"></script>
<script src="../../plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="../../js/contact.js"></script>
</body>
</html>
