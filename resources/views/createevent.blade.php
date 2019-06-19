<!-- createevent.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Full Calendar Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  
 









  </head>
  <body>
    <div class="container">
      <br/>
      <form method="post" action="{{url('event/add')}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            
            <label for="Title">Nom Patient:</label>
           <select class="form-control" name="patient_id">
      @foreach($patients as $item)
        <option value="{{$item}}" >{{$item->nom}} {{$item->prenom }}</option>
      @endforeach
    </select>
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
        
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Add Event</button>
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
    <script type="text/javascript"> 


var sites =  {!! json_encode($test) !!};
        $('#startdate').datetimepicker({ 
           
            
             daysOfWeekDisabled: [0, 6],
                format: 'DD-MM-YYYY HH:00',
                 minDate:  new Date() ,
                disabledHours: sites,
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
  </body>
</html>







