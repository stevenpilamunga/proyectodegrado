<div class="mb-3">
            <label for="cur_titulo" class="form-label">Tiulo del Curso</label>
            <input type="text" id="cur_titulo" value="{{ isset($curso)?$curso->cur_titulo:''}}" name="cur_titulo" class="form-control">

            <label for="cur_descripcion" class="form-label">Descripcion</label>
            <input type="text" id="cur_descripcion" value="{{ isset($curso)?$curso->cur_descripcion:''}}"  name="cur_descripcion" class="form-control">

            <label for="cur_grupo" class="form-label">Grupo</label>
            <input type="text" id="cur_grupo"  value="{{ isset($curso)?$curso->cur_grupo:''}}" name="cur_grupo" class="form-control">
            

        </div>
        <button type="" class="btn btn-info">Guardar</button>
