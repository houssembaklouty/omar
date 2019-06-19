

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>patient list</title>
 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
         <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">  
         <link href="
https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.dataTables.min.css" rel="stylesheet">  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>


 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>


</head>
<body>

<div class="" role="main" id="new">

    <div class="clearfix"></div>
    <div class="row">



        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2 style="color:#2a3f54;font-weight:bold">Liste des produits </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                        <!-- DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code> --->
                    </p>
                    <table id="example" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="color:#2a3f54;font-weight:normal;font-size:20px">id</th>
                                <th style="color:#2a3f54;font-weight:normal;font-size:20px">nom</th>
                                <th style="color:#2a3f54;font-weight:normal;font-size:20px">prenom</th>
                              

                            </tr>
                        </thead>


                        <tbody>
                            @foreach($patients as $pt)
                            <tr>
                                <td> {{$pt->id}}</td>
                                <td>{{$pt->nom}}</td>
                                <td>{{$pt->prenom}}</td>
                                  <td style="text-align:center;"><a href="{{action('PatientController@edit', $pt->id)}}" class="btn btn-warning">Modifier</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
    @stack('scripts')

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
</html>