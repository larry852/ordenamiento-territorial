<form class="form-horizontal" role="form" method="POST" action="{{ url('ordenamientos') }}">
{{ csrf_field() }}
  <h2 align="center">Place</h2>
  <div class="form-group">
    <label for="place_name" class="col-sm-2 control-label">Name (*)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="place_name" required="Obligatorio" placeholder="Place Name">
    </div>
  </div>
  <div class="form-group">
    <label for="dane" class="col-sm-2 control-label">Dane</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="dane" required="Obligatorio" placeholder="Codigo Dane">
    </div>
  </div>
  <div class="form-group">
    <label for="pattern" class="col-sm-2 control-label">Pattern</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pattern" placeholder="Pattern">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
</form>