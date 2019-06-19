<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Full Calendar Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap1.min.css">
    <script src="styles/bootstrap4/jjTime.js"></script>  
    
  
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/dataTables.bootstrap.min.css">


<script type="text/javascript" src="styles/bootstrap4/a.min.js"></script>
<link href="styles/bootstrap-datetimepicker.min.css" rel="stylesheet">
     <link rel="stylesheet" href="styles/bootstrap-datepicker.css" />  
    <script type="text/javascript" src="styles/bootstrap4/bootstrap-datetimepicker.min.js"></script>
    <script src="styles/bootstrap4/bootstrap-datepicker.js"></script>  
  <script type="text/javascript" src="styles/bootstrap4/moment.min.js"></script>

</head>

  <body>
  <div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>

		<!-- Header -->

        <header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									 <div>
                                    <img style="width:109px" src="images/logo.png">
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
													<li><a href="/patient">Mon Profil</a></li>
													<li ><a href="/addRdv">Effectuer rendez-vous</a></li>
													<li><a href="/historiqueCons">historique des consulations</a></li>
													
						
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
							<div class="home_title">Espace Patient</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		
	</div>
    <div class="container">
      <br/>
      <form method="post" action="{{url('event/add')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Title">Motif :</label>
            <input type="text" class="form-control" name="title">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong> Date RDV : </strong>  
            <input class="date form-control"  type="text" id="startdate" name="startdate">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong> Heure RDV : </strong>  
            <input class="date form-control"  type="text" id="enddate" name="enddate">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Effectuer Rendez-vous</button>
          </div>
        </div>
      </form>
      <br>
      <!--<div class="col-sm-6" style="height:130px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker11'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
    </div>-->
	</div>
	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
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
    <script type="text/javascript"> 

        $('#startdate').datetimepicker({ 
           
             daysOfWeekDisabled: [0, 6],
                format: 'DD-MM-YYYY HH:00',
                disabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 18, 19, 20, 21, 22, 23],
         });
         $('#enddate').datepicker({ 
            autoclose: true,   
            format: 'yyyy-mm-dd'
         }); 
          $(function () {
            $('#datetimepicker11').datetimepicker({
                daysOfWeekDisabled: [0, 6],
                format: 'DD-MM-YYYY HH:mm',
                disabledHours: ['7', '18'],
            });
        });
    </script>
  
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/contact.js"></script>
</body>
</html>
