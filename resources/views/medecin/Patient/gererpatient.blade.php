<!DOCTYPE html>
<html lang="en">
<head>
<title>liste des patients</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}"  type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  
</head>
<body>
<!-- <style>a.paginate_button.current {
    border: none;
    background: #32c69a !important;
    border-radius: 100% !important;
    color: white !important;
}
a.paginate_button.current :hover{
    border: none;
    background: #32c69a !important;

}

</style> -->


	<!-- Menu -->

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/contact.jpg') }}" data-speed="0.8"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									 <div>
                                    <img style="width:109px" src="{{ asset('images/logo.png') }}">
                                    </div>
                                    <div class="logo">
                                    <a href="#"> Dr mseddi Med<span></span></a>	
									</div>
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
		</header>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">gestion des patients</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	

				<!-- Contact form 
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_title">Liste des  patients</div>
						<div class="contact_form_container">
							<div class="container">-->



<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    
@endif
    <br><br><br><br>


                 
               
         
   
  <div class="container" >
        <div class="table-wrapper" class="col-sm-12">
            <div class="table-title">
                 
                <div class="row">
                   
                    <div class="col-sm-12">
                     <center>  <h2><b>liste des patients</b></h2></center>
                         

                        
                        </div>
                    <div class="col-sm-4">
                 		<a class="" href="{{route('Patient.create') }}">
                 			<i class="fa fa-plus" ></i>Ajouter nouveau patient</a>
                    </div>
                </div>
            </div>
           
           <table id="example" class="table table-striped table-bordered" >
    <thead>
        <tr>
            <td>Numero</td>
            <td>nom</td>
            <td>prenom</td>
            <td>sexe</td>
            <td>Tel</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($patients as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nom }}</td>
            <td>{{ $value->prenom }}</td>
            <td>{{ $value->sexe }}</td>
            <td>{{ $value->Tel}}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>
   <a class="fa fa-pencil" title="Edit" data-toggle="tooltip" href="{{route('Patient.edit', $value->id) }}">
            	</a>
  <a class="fa fa-folder" title="profil" data-toggle="tooltip" href="{{route('Patient.profilMed',$value->id)}}">
            	</a>
                <a class="fa fa-trash" title="Delete" data-toggle="tooltip"href=""></a>
       <a class="fa fa-info" title="ant" data-toggle="tooltip"href="{{route('antecedents.create', $value->id) }}"></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
        </div>
    </div>     
                         



       

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/footer.jpg')}}" data-speed="0.8"></div>
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
							<div class="copyright">

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




</body>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/easing/easing.js') }}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "lengthMenu": "",
            "zeroRecords": "Pas de resultat",
            "info": "",
            "infoEmpty": "pas de resulttat",
            "infoFiltered": "",
			"sSearch":"Recherche",
"oPaginate": {
                                "sFirst": "Premiere",
                                "sPrevious":  "Precedente",
                                "sNext": "prochaine",
                                "sLast": "dernier",
                            }
        }
    } );
} );
</script>
</html>