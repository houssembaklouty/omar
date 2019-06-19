<!-- create.blade.php -->


<div class="container">
  <form method="post" action="{{url('rdv')}}">
    <div class="form-group row">
      {{csrf_field()}}
         <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">etat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="etat">
        </div>     
    </div>
          <div class="form-group row">

      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">date</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="date">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">motif</label>
      <div class="col-sm-10">
        <textarea name="motif" rows="8" cols="80"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
