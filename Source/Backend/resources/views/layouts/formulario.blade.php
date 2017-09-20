<form class="form-horizontal" role="form" method="POST" action="{{ url('ordenamientos') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="departamento" class="col-sm-2 control-label">Departamento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="departamento" placeholder="Departamento">
    </div>
  </div>
  <div class="form-group">
    <label for="municipio" class="col-sm-2 control-label">Municipio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="municipio" placeholder="Municipio">
    </div>
  </div>
  <div class="form-group">
    <label for="ano" class="col-sm-2 control-label">Año</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ano" placeholder="Año">
    </div>
  </div>
  <div class="form-group">
    <label for="simbolo" class="col-sm-2 control-label">Simbolo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="simbolo" placeholder="Simbolo">
    </div>
  </div>
  <div class="form-group">
    <label for="cobertura" class="col-sm-2 control-label">Cobertura</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="cobertura" placeholder="Cobertura">
    </div>
  </div>
  <div class="form-group">
    <label for="uso" class="col-sm-2 control-label">Uso</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="uso" placeholder="Uso">
    </div>
  </div>
  <div class="form-group">
    <label for="area_hectareas" class="col-sm-2 control-label">Area_hectareas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="area_hectareas" placeholder="Area_hectareas">
    </div>
  </div>
  <div class="form-group">
    <label for="localizacion" class="col-sm-2 control-label">Localizacion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="localizacion" placeholder="Localizacion">
    </div>
  </div>
  <div class="form-group">
    <label for="codigo_dane" class="col-sm-2 control-label">Codigo_dane</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="codigo_dane" placeholder="Codigo_dane">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
</form>