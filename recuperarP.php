<?php require_once("VISTA/header.php"); ?>

<div class="container d-flex flex-column" style="margin-top:3vw;">
      <div class="row align-items-center justify-content-center
          min-vh-75 mt-5">
        <div class="col-12 col-md-8 col-lg-6 col-xl-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="mb-4">
                <h5>¿Has olvidado tu contraseña?</h5>
                <p class="mb-2">Para asegurarnos de que eres el propietario de la cuenta, deberas ingresar tu usuario y tu email
                </p>
              </div>
              <form action="Index.php" method="POST">
			  <div class="mb-3">
                  <label for="usuario" class="form-label">Usuario</label>
                  <input type="text"  class="form-control" name="usuario" placeholder="Nombre de usuario"
                    required="">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email"  class="form-control" name="email" placeholder="Direccion de correo"
                    required="">
                </div>
                <div class="mb-3 d-grid">
                    <input type="submit" name="btnRecuperar" value="Recibir contraseña" class="btn btn-primary btn-block gradient-custom-2 mb-3">
					<?php
					
      if(isset($error) && $error =="0"){
				echo "Se le ha enviado la contraseña al correo"; 

      }else if(isset($error) && $error == "1"){
			echo "No coinciden los valores que has dado";
	  }?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <?php require_once("VISTA/footer.php"); ?>
 