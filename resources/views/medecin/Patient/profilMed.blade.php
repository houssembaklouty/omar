<!DOCTYPE html>
<html lang="en">
<head>
<title>liste des patients</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css') }}">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css')}}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="super_container">

    <!-- Menu -->

    <!-- Home -->

    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/contact.jpg')}}" data-speed="0.8"></div>

        <!-- Header -->

        <header class="header" id="header">
            <div>
                <div class="header_top">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                     <div>
                                    <img style="width:109px" src="{{ asset('images/logo.png')}}">
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
                            <div class="home_title">gestion des patients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

<style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;
        font-family: 'Open Sans', sans-serif;
    }
    .table-wrapper {
    
        margin: 30px auto;
        background: #fff;
        padding: 20px;  
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }
    .table-title .add-new i {
        margin-right:4px;
    }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 127px;
    }
    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }    
    table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
    table.table .form-control.error {
        border-color: #f50000;
    }
    table.table td .add {
        display: none;
    }
</style>
            <div class="row">

                <!-- Contact form -->
                <!-- Make an Appointment -->






<div class="contact">
        
<div class="card"  style=" width: 90%; margin: 0 auto;">
        <div class="card-header">
        

          
        Profil medical Num {{$patient->id}} : {{$patient->nom}} &nbsp;&nbsp; {{$patient->prenom}}
        </div>
        <div class="card-body">
                        <div class="row">

            

<section id="tabs" class="project-tab">
            <div class="container">
                <div style=" width: 1100px;" class="row">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"aria-controls="nav-home" aria-selected="true">liste des ordonances</a>
<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">liste des lettre de liaison</a>
<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">liste des certificats</a>
<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">liste des antecedents</a>
<a class="nav-item nav-link" id="cons" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">liste des consultations</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>date</th>
                                            <th>motif</th>
                                            <th>actions</th>
                                        </tr>
                                    </thead>
   <tbody>
    <tr>
     <td>{{$patient->created_at}}</td>

<td>{{$patient->nom}}&nbsp;
{{$patient->prenom}}{{$patient->id}}</td>
 <td>{{$patient->Tel}}</td>   

        <td>
            <a class="fa fa-pencil" title="Edit" data-toggle="tooltip" href=""></a> &nbsp;&nbsp;
            <a href="">supprimer</a> &nbsp;&nbsp;
            <a href="">Nv Ord</a>
        </td>
    </tr>
 
                                     </tbody>
                                </table>
                            </div>


                             <div class="tab-pane fade" id="cons" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>date</th>
                                            <th>motif</th>
                                            <th>actions</th>
                                        </tr>
                                    </thead>
   <tbody>
    <tr>
     <td>{{$patient->Consultation->first()}}</td>

<td>{{$patient->nom}}&nbsp;
{{$patient->prenom}}{{$patient->id}}</td>
 <td>{{$patient->Tel}}</td>   

        <td>
            <a class="fa fa-pencil" title="Edit" data-toggle="tooltip" href=""></a> &nbsp;&nbsp;
            <a href="">supprimer</a> &nbsp;&nbsp;
            <a href="">Nv Ord</a>
        </td>
    </tr>
 
                                     </tbody>
                                </table>
                            </div>
                            <!-- <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>date</th>
                                            <th>motif</th>
                                            <th>actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">01/01/2011</a></td>
                                            <td>traitement y</td>
                                            <td><a class="fa fa-folder" data-toggle="tooltip" href="/ProfilMM"></a>
                            
                            <a class="fa fa-pencil" title="Edit" data-toggle="tooltip" href="/modifPatient"></a>
                            <a class="fa fa-trash" title="Delete" data-toggle="tooltip"href=""></a>
                            <a class="fa fa-print" title="Delete" data-toggle="tooltip"href=""></a> 
                        </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">01/01/2011</a></td>
                                            <td>traitement x</td>
                                            <td>
                                <div class="button-demo">
 <button type="button" class="btn btn-info waves-effect">consulter</button>
                                <button type="button" class="btn btn-warning waves-effect">editer</button>
                                <button type="button" class="btn btn-danger waves-effect">supprimer</button>
                            
                                
                            <button type="button" class="btn btn-success waves-effect">imprimer</button>
                            </div></td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


            </div>
        </div>
        </div>

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
</div>
<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrapN.min.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/easing/easing.js')}}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{ asset('js/contact.js')}}"></script>
</body>
</html>