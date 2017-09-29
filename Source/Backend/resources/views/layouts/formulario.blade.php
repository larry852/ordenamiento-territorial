<form class="form-horizontal" role="form" method="POST" action="{{ url('ordenamientos') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="place_name" placeholder="Name" value="Roncesvalles">
    </div>
  </div>
  <div class="form-group">
    <label for="dane" class="col-sm-2 control-label">Dane</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="dane" placeholder="Codigo dane" value="73622">
    </div>
  </div>
  <div class="form-group">
    <label for="flag" class="col-sm-2 control-label">Flag</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="flag" placeholder="Flag" value="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Roncesvalles_%28Tolima%29.svg/750px-Flag_of_Roncesvalles_%28Tolima%29.svg.png">
    </div>
  </div>
  <div class="form-group">
    <label for="pattern" class="col-sm-2 control-label">Pattern</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pattern" placeholder="Pattern" value="1">
    </div>
  </div>
  <div class="form-group">
    <label for="Zone_name" class="col-sm-2 control-label">Zone name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="zone_name" placeholder="Zone Name" value="Rural">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="description" placeholder="Description" value="esto es una zona rural del municipio">
    </div>
  </div>
  <div class="form-group">
    <label for="simbolo" class="col-sm-2 control-label">Simbolo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="simbolo" placeholder="Simbolo" value="PN">
    </div>
  </div>
  <div class="form-group">
    <label for="uso_description" class="col-sm-2 control-label">Uso Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="uso_description" placeholder="Uso Description" value="Pastos naturales">
    </div>
  </div>
  <div class="form-group">
    <label for="latitude_start" class="col-sm-2 control-label">Latitude Start</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="latitude_start" placeholder="Latitude Start">
    </div>
  </div>
  <div class="form-group">
    <label for="latitude_end" class="col-sm-2 control-label">Latitude End</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="latitude_end" placeholder="Latitude End">
    </div>
  </div>
  <div class="form-group">
    <label for="longitude_start" class="col-sm-2 control-label">Longitude Start</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="longitude_start" placeholder="Longitude Start">
    </div>
  </div>
  <div class="form-group">
    <label for="longitude_end" class="col-sm-2 control-label">Longitude End</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="longitude_end" placeholder="Longitude End">
    </div>
  </div>
  <div class="form-group">
    <label for="location_description" class="col-sm-2 control-label">Location Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="location_description" placeholder="Location Description">
    </div>
  </div>
  <div class="form-group">
    <label for="measure" class="col-sm-2 control-label">Measure</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="measure" placeholder="Measure" value="10000">
    </div>
  </div>
  <div class="form-group">
    <label for="unit" class="col-sm-2 control-label">Unit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="unit" placeholder="Unit" value="km">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
</form>