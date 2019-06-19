
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>etat</th>
        <th>date</th>
        <th>motif</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
        
        
         @foreach($rdv as $r)
      <tr>
     <td>{{$r['id']}}</td>
        <td>{{$r['etat']}}</td>
        <td>{{$r['date']}}</td>
        <td>{{$r['motif']}}</td>
     
        
     
        <td><a href="{{action('RDVController@edit', $r['id'])}}" class="btn btn-warning">Edit</a></td>
        <td><form action="{{action('RDVController@destroy', $r['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form></td>
       </tr>
      @endforeach
        
    </tbody>
  </table>
  </div>



