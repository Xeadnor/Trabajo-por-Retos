<?php session_start();
    if(isset($_GET["logout"])){
      if($_GET["logout"] =="0"){

        session_destroy();
        header("Location:index.php");
      }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frikisetas</title>
    <link rel="stylesheet" href="style.css">
    <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
</head>
<div id="divlogin">
                <form id="formlogin" method="POST" novalidate>
                  <h4 class="text-primary" id="ti">Introduce tus credenciales de superheroe</h4>

                  <div class="form-outline mb-4" id="ti">
                    <input type="text" id="usuario" name="nick" placeholder="Usuario" class="form-control"
                    maxlength="30" required/>
                  </div>

                  <div class="form-outline mb-4" id="ti">
                    <input type="password" id="password" name="clave" placeholder="password"  maxlength="30" required class="form-control" />
                  </div>
                  <input id="error" name="error" type="hidden" value="0">
                  <div class="text-center pt-1 mb-5 pb-1 d-grid" id="ti">
                    <input type="submit" name="btningresar" value="Ingresar" class="btn btn-primary btn-block gradient-custom-2 mb-3">
                    <a class="text-muted lead" href="recuperarP.php?valor=1">Has olvidado la contraseña?</a>
                  </div>
                  <?php 

if(isset($_SESSION["errorLogado"])){  
    if($_SESSION["errorLogado"] == 0){
    echo "<p style='color:#FF0000' id='falloLogado'> El nick o la contraseña no coinciden </p>";
}
} ?>

                  <div class="d-flex align-items-center justify-content-center pb-4" id="ti">
                    <p class="mb-0 me-2 text-primary lead" id="ti">No tienes aun una cuenta?</p>
                    <a href="VISTA/Landing.php"><button type="button" class="btn btn-outline-danger">Crea una ahora!</button></a>
                  </div>

                </form>        
    </div>
<body id="body">


<header class="p-0 bg-dark text-white">
    
<div class="container-fluid ml-0 mr-0 p-0">
    <div class="row justify-content-around  m-0 p-0 pt-2 pb-2">
      <div class="d-none d-md-block col-md-5 d-flex flex-nowrap p-0">
        <ul class="nav d-flex flex-nowrap align-items-center ">
         <li><a href="#" class="nav-link px-2 text-secondary" id="font-nav">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white" id="font-nav">Catalogo</a></li>
          <li><a href="#" class="text-decoration-none text-white">
                <img src="VISTA/imagenes/custom.png" alt="carrito" width="90" 
                height="40" class="p-1 mt-2">
              </a></li>
          <li><a href="#" class="text-decoration-none text-white" id="font-nav">
                <img src="VISTA/imagenes/estrella.png" alt="carrito" width="45" 
                height="40" class="p-1" >
              </a></li>Nuevo
          <li><a href="#" class="text-decoration-none text-white" id="font-nav">
                <img src="VISTA/imagenes/descuento.png" alt="carrito" width="50" 
                height="40" class="p-1" >
              </a></li>Ofertas
          <li><a href="#" class="text-decoration-none text-white" id="font-nav">
                <img src="VISTA/imagenes/camiseta.png" alt="carrito" width="50" 
                height="40" class="p-1" >
              </a></li>
              <li><a href="#" class="text-decoration-none text-white" id="font-nav">
                <img src="VISTA/imagenes/sudadera.png" alt="carrito" width="50" 
                height="40" class="p-1">
              </a></li>
        </ul>
      </div>
      <div class="row col-12  justify-content-center col-md-6 p-0 justify-content-md-end">
      <form class="col-4">
          <input type="search" class="form-control form-control-dark" style="height:40px;margin-top:10px;" placeholder="Busqueda..." aria-label="Search">
        </form>

        <div id="divlogreg" class="col-4 p-0">
            <button type="button" class="btn btn-block btn-outline-light d-block col-6 me-1 mt-2" id="login" style="height:40px;">Loguearse</button>
            <a href="VISTA/Landing.php" class="btn btn-warning d-block col-6 mt-2" style="height:40px;">Registrarse</a>
        </div>
        <div class="dropdown d-flex  col-3 p-0 align-items-center" style="margin-left:1vw;" id="hi">
        <?php 
if(isset($_SESSION["nick"])){
  echo $_SESSION["nick"];
  echo "<script> 
  document.getElementById('divlogreg').style.display='none';
  </script>";
}else{
  echo "<script> 
  document.getElementById('divlogreg').style.display='flex';
  </script>";
}
 ?>
            <?php 
            if(isset($_SESSION["avatar"])){
             echo "<a href='#' class='d-block link-blue text-decoration-none dropdown-toggle' style='margin-right:1vw;' id='dropdownUser1' data-bs-toggle='dropdown' aria-expanded='false'>";
             echo "<img id='avatarImg' src='VISTA/imagenes/login.png' alt='mdo' width='60' 
              'height='45' class='rounded-circle'>
              </a>";
            }
            ?>
              
              <a href="#">
                <img src="VISTA/imagenes/carrito-de-compras.png" alt="carrito" width="60" 
                height="50" class="border border-danger rounded-circle p-1">
              </a>
              <?php 
if(isset($_SESSION["avatar"])){
  echo "<script> 
  document.getElementById('avatarImg').src='VISTA/imagenes/" . $_SESSION["avatar"] . "'
  </script>";
}else{
  echo "<script> 
  document.getElementById('dropdownUser1').style.display='none !important';
  document.getElementById('avatarImg').src='VISTA/imagenes/login.png'
  </script>";
}
 ?>

        <?php 
        if(isset($_SESSION["nick"])){
            echo  "<ul class='dropdown-menu text-small' aria-labelledby='dropdownUser1'>";
            echo  "<li><a class='dropdown-item' href='#'>Opciones</a></li>";
            echo  "<li><a class='dropdown-item' href='#'>Perfil</a></li>"; 
            echo  "<li><hr class='dropdown-divider'></li>";
            echo  "<li><a class='dropdown-item' href='index.php?logout=0'>Desconectarse</a></li>";
            }
                if(isset($_SESSION["tipo"])){
                    if($_SESSION["tipo"] == 2){
                      echo "<li><hr class='dropdown-divider'></li>";
                      echo "<li><a class='dropdown-item' href='#'>Opciones Admin</a></li>";
                    }
                }
               ?>
            </ul>
          </div>
      </div> 
        </div>
        <?php 
if(isset($_SESSION["errorLogado"])){
  echo "<script> 
  document.getElementById('divlogin').style.display='block';
  body.addEventListener('click',logar2)

function logar2(e) {
    document.onclick = function(e){
        if(e.target.id !== 'divlogin' && e.target.id !== 'login' && e.target.id !== 'formlogin'
        && e.target.id !== 'usuario'
        && e.target.id !== 'password'
        && e.target.id !== 'reenviador'
        && e.target.id !== 'divr'
        && e.target.id !== 'falloLogado'
        && e.target.id !== 'ti'){

          divlogin.style.display = 'none';

        }
    }
   
}
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
  </script>";
  unset($_SESSION["errorLogado"]);
}

 ?>
  </header>
  <script src="VISTA/js/bootstrap.bundle.min.js"></script>
  <script src="JS/home.js"></script>
</body>
</html>


