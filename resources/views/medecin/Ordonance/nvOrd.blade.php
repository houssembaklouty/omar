<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/contact_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('styles/dataTables.bootstrap.min.css')}}">

<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

<div class="super_container">

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
            <h4 align="center">Ajouter une nouvelle ordonance</h4>
            <br />

            <span id="error"></span>

              <div class="alert alert-danger" style="display:none">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>

            <br />

             <form method="post" id="insert_form">

                <div class="form-group">
                    <select class="form-control" name="patient_id">
                        <option value="" disabled="" selected="">Liste des patients</option>

                        @foreach($patients as $item)

                            @if(empty($IDpatient))
                                @if($item->id == $IDpatient)
                                    <option value="{{$item->id}}" selected="">{{$item->nom}} {{$item->prenom }}</option>
                                @else
                                    <option value="{{$item->id}}">{{$item->nom}} {{$item->prenom }}</option>
                                @endif
                            @else
                                <option value="{{$item->id}}">{{$item->nom}} {{$item->prenom }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="table-repsonsive">
                    <table class="table table-bordered" id="item_table">
                        <tr>
                            <th>Veuillez choisir medicaments</th>
                            <th>Duree de traitement</th>
                            <th>Nombre de dose</th>
                            <th>Nombre de jour(Occurence)</th>
                            <th><button type="button" name="add" class="btn btn-success btn-sm add"><i class="fa fa-plus" aria-hidden="true"></i></button></th>
                        </tr>
                    </table>

                    <div class="form-group">
                         <label for="commentaire" class="control-label">Commentaire</label>
                        <textarea class="form-control" id="commentaire" name="commentaire" rows="5"></textarea>
                    </div>

                    <div align="center">
                         <input type="submit" name="submit" class="btn btn-info" value="Validier" />
                    </div>
                </div>
            </form>
        </div>


</div>













            
    
    
    
    <!-- Footer -->

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


<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/easing/easing.js')}}"></script>
<script src="{{ asset('plugins/parallax-js-master/parallax.min.js')}}"></script>

<script src="{{ asset('js/contact.js')}}"></script>



<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><select class="form-control" name="nomMedic[]" id="nomMedic" style="width:100%" tabindex="-1" aria-hidden="true"> <option value="" disabled="" selected="">Veuillez choisir medicaments</option> <option value="ABBOTICINE 200mg Pdre.Susp.Or. Fl 60ml">ABBOTICINE 200mg Pdre.Susp.Or. Fl 60ml</option> <option value="ABILICARE 10mg Comp. Bt 30">ABILICARE 10mg Comp. Bt 30</option> <option value="ABILICARE 15mg Comp. Bt 30">ABILICARE 15mg Comp. Bt 30</option> </select> </td>';
  html += '<td><input type="text" name="DureeTotal[]" class="form-control DureeTotal" /></td>';
  html += '<td><input type="text" name="nbrDose[]" class="form-control nbrDose" /></td>';
  html += '<td><input type="text" name="nbr_jour[]" class="form-control nbr_jour" /></td>';

  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><i class="fa fa-minus-circle" aria-hidden="true"></i></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  $('.alert-danger').hide();
  $('.alert-danger').html('');

  var error = '';
  $('.DureeTotal').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Un Duree de traitement est vide.</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.nbrDose').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Un Champ Nombre de dose est vide.</p>";
    return false;
   }
   count = count + 1;
  }); 

  $('.nbr_jour').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Un Champ Nombre de jour est vide.</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.nomMedic').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Un Champ Medicaments est vide.</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   $.ajax({
    url:"{{ route('Ordonance.store') }}",
    method:"POST",
    data:form_data,
    success:function(data)
    {
        console.log('data', data);
        console.log('form_data', form_data);
        if(data.success)
        {
            $('#item_table').find("tr:gt(0)").remove();
            $('#error').html('<div class="alert alert-success">Ordonance bien ajouté .. !</div>');
        }
    },
    error: function (request, status, error) {
        json = $.parseJSON(request.responseText);
        $.each(json.errors, function(key, value){
            $('.alert-danger').show();
            $('.alert-danger').append('<p>'+value+'</p>');
        });
        $("#result").html('');
    }

   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>

</body>
</html>
