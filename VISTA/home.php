<?php 
  require_once("VISTA/header.php");
?>

<div class="row justify-content-center col-12 m-0" style="z-index:1;" id="he">
    <div class="col-12 d-flex justify-content-center bg-danger">
    <p style="font-size:30px">POSIBLE TEXTO O FRASE GANCHO?</p>
    </div>
    </div>

<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active bg-danger"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="bg-danger"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="bg-danger"></button>
  </div>
  
  <!-- The slideshow/carousel  1420x400-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="VISTA/IMAGENES/slide1.jpg" alt="slide 1" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="VISTA/IMAGENES/slide2.png" alt="slide 2" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="VISTA/IMAGENES/slide3.png" alt="slide 3" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  
  <button class="carousel-control-prev" style="top:18%;bottom:18%" type="button" data-bs-target="#demo" id="estec" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle" id="carousel1"></span>
  </button>
  <button class="carousel-control-next" style="top:18%;bottom:18%" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
  </button>
</div>

<div class="row justify-content-center col-12 m-0" style="z-index:1;" id="he">
    <div class="col-12 d-flex justify-content-center bg-danger">
    <p style="font-size:30px">BEST SELLERS? MAS VENDIDOS? RECOMENDADOS?</p>
    </div>
    </div>


<?php require_once("VISTA/footer.php"); ?>

