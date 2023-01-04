<?php require_once("VISTA/header.php"); ?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <div class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </div>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="perfil.php?option=perfil" class="nav-link align-middle px-0">
                        <i class="fas fa-user me-3"></i><span class="ms-1 d-none d-sm-inline">Perfil</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="perfil.php?option=editar" class="nav-link align-middle px-0">
                        <i class="fas fa-tools me-3"></i><span class="ms-1 d-none d-sm-inline">Editar</span>
                        </a>
                    </li>
                  
            </div>
        </div>
        <?php
          if($_GET["option"] == "perfil"){
            require_once("VISTA/perfil.php");
          }
          if($_GET["option"] == "editar"){
            require_once("VISTA/editar.php");
          }
        ?>
    </div>
</div>


<?php require_once("VISTA/footer.php"); ?>











