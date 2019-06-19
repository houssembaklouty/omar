<html><head>
    
    
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        
      <link rel="stylesheet" href="https://www.citizensfiber.com/assets/DataTables-1.10.7/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.css">
        
      <link rel="stylesheet" href="https://www.citizensfiber.com/assets/DataTables-1.10.7/extensions/Responsive/css/dataTables.responsive.css">
        
      
    </head>
    <style>

body { font-size: 140% }
 
    table.dataTable th,
    table.dataTable td {
        white-space: nowrap;
    }
    </style>
    <body>
    <table id="example" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
            <th>Extn.</th>
            <th>E-mail</th>
        </tr>
    </thead>
 
    <tbody>
        <tr>
            <td>Tiger</td>
            <td>Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>5421</td>
            <td>t.nixon@datatables.net</td>
        </tr>
    </tbody>
</table></body>
    <footer></footer>
    <script src="https://www.citizensfiber.com/assets/DataTables-1.10.7/media/js/jquery.js"></script>
      <script src="https://www.citizensfiber.com/assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>

      <script src="https://www.citizensfiber.com/assets/DataTables-1.10.7/extensions/Plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
      <script src="https://www.citizensfiber.com/assets/DataTables-1.10.7/extensions/Responsive/js/dataTables.responsive.js"></script>


<script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
    
</script>
   
</html>
