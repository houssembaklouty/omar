
<div class="container">
  <form method="post" action="{{action('RDVController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">etat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="etat" value="{{$rdv->etat}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">date</label>
      <div class="col-sm-10">
        <textarea name="date" rows="8" cols="80">{{$rdv->date}}</textarea>
      </div>
    </div>
      <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">motif</label>
      <div class="col-sm-10">
        <textarea name="motif" rows="8" cols="80">{{$rdv->motif}}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
