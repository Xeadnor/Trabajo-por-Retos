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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body id="body">


<div class="container-fluid justify-content-center" style="z-index:3;" id="divlogin">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-4" id="ti">
        <div class="card bg-dark text-white" style="border-radius: 2rem;" id="ti">
          <div class="card-body p-3 text-center">

            <div class="mt-md-4" id="ti">
            <form id="formlogin" method="POST" novalidate id="ti">
              <h2 class="fw-bold mb-2 text-uppercase" id="ti">Login</h2>
              <p class="text-white-50 mb-5" id="ti">¡Introduce tus credenciales de superheroe!</p>

              <div class="form-outline form-white mb-4" id="ti">
                <input type="text" id="usuario" class="form-control form-control-lg" name="nick" placeholder="Usuario" maxlength="30" />
                <label class="form-label" for="usuario" id="ti">Nick de usuario</label>
              </div>

              <div class="form-outline form-white mb-4" id="ti">
                <input type="password" id="password" class="form-control form-control-lg" name="clave" placeholder="password" maxlength="30"/>
                <label class="form-label" for="password" id="ti">Contraseña</label>
              </div>
              <input id="error" name="error" type="hidden" value="0">
              <?php
              if(isset($_SESSION["errorLogado"])){  
    if($_SESSION["errorLogado"] == 0){
    echo "<p style='color:#FF0000' id='falloLogado'> El nick o la contraseña no coinciden </p>";
}
} ?>
            
              <p class="small mb-5 pb-lg-2" id="ti"><a class="text-white-50" href="recuperarP.php">¿Has olvidado tu contraseña?</a></p>

              <div class="form-outline form-white mb-4" id="ti">
              <button class="btn btn-outline-light btn-lg px-5 gradient-custom-2" type="submit" name="btningresar">Login</button>
              </div>

              <div class="d-flex justify-content-center text-center mt-4 pt-1" id="ti">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div class="d-flex align-items-center justify-content-center pb-4" id="ti">
                    <p class="mb-0 me-2 text-primary lead" id="ti">No tienes aun una cuenta?</p>
                    <a href="VISTA/Landing.php"><button type="button" class="btn btn-outline-danger">Crea una ahora!</button></a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>










  <div class="row justify-content-center col-12 m-0" style="z-index:1;" id="he">
    <div class="col-12 d-flex justify-content-center">
    <a href="index.php" class="col-4 col-xl-3"><img class="logo col-12" src="VISTA/imagenes/FrikisetasLogo3.png" alt="logo Frikisetas"></a>
    </div>
    </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary" style="z-index:1;">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <a class="navbar-brand text-light" href="index.php">Home</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Catalogo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Camisetas 1</a></li>
              <li><a class="dropdown-item" href="#">Camisetas 2</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Puedes personalizar tu camiseta aqui</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-white p-0" href="#" id="Cust">Custom</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-white" href="#">Nuevo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-white" href="#">Ofertas</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link disabled text-white" href="#">Camisetas</a>
          </li>
        </ul>
      </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Busqueda..." aria-label="Search">
        <div id="divlogreg" style="display:flex">
          <button  class="btn btn-block btn-outline-light d-block mx-1" id="login">Loguearse</button>
          <a href="VISTA/Landing.php" class="btn btn-warning d-block mx-1">Registrarse</a>
        </div>
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
if(isset($_SESSION["avatar"])){

  echo  "<div class='dropdown'>";
  echo "<button class='btn btn-secondary dropdown-toggle p-0' type='button' id='dropdownMenu2' data-bs-toggle='dropdown' aria-expanded='false'>";
  echo "<img id='avatarImg' src='VISTA/imagenes/login.png' alt='mdo' width='40' 
  'height='30' class='rounded-circle'>";  
  echo "</button>"; 
  echo "<ul class='dropdown-menu dropdown-menu-end' aria-labelledby='dropdownMenu2' >";
  echo  "<li><a class='dropdown-item' href='perfil.php?option=editar'>Opciones</a></li>";
  echo  "<li><a class='dropdown-item' href='perfil.php?option=perfil'>Perfil</a></li>"; 
  echo  "<li><hr class='dropdown-divider'></li>";
  echo  "<li><a class='dropdown-item' href='index.php?logout=0'>Desconectarse</a></li>";
  if(isset($_SESSION["tipo"])){
    if($_SESSION["tipo"] == 2){
      echo "<li><hr class='dropdown-divider'></li>";
      echo "<li><a class='dropdown-item' href='#'>Opciones Admin</a></li>";
    }
}
  echo "</ul>";
  echo "</div>";
 }
 ?>
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
        <a class="navbar-brand mx-2" href="#">
          <img src="VISTA/imagenes/carrito-de-compras.png" alt="carrito" width="30" height="28" class="d-inline-block align-text-top">
         
        </a>
      </form>
    </div>
  </nav>

  <?php 
if(isset($_SESSION["errorLogado"])){
  echo "<script> 
  document.getElementById('divlogin').style.display='block';
  body.addEventListener('click',logar2)

function logar2(e) {
    document.onclick = function(e){
        if(e.target.id !== 'login' && e.target.id !== 'formlogin'
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