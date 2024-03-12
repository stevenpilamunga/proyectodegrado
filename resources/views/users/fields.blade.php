<div class="mb-3 text-center">

     

            <label for="usu_nombres" class="form-label">Nombre</label>
            <input type="text" id="usu_nombres" value="{{ isset($curso)?$curso->usu_nombres:''}}"  name="usu_nombres" class="form-control">
     
            <label for="email" class="form-label">Correo</label>
            <input type="text" id="email"  value="{{ isset($curso)?$curso->email:''}}" name="email" class="form-control">
            
            <label for="usu_name" class="form-label">contraseña</label>
            <input type="text" id="usu_password" value="{{ isset($curso)?$curso->usu_password:''}}" name="usu_password" class="form-control">
             
            <label for="usu_name" class="form-label">telefono</label>
            <input type="text" id="usu_telefono" value="{{ isset($curso)?$curso->usu_telefono:''}}" name="usu_telefono" class="form-control">

           

        </div>
        <button type="" class="btn btn-primary ">Guardar</button>


       