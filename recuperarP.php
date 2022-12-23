
<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Forgot Password</title>
    <link href="VISTA/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
  </head>

  <body>
	<div class="container-fluid ml-0 mr-0 p-0">
  <div class="row justify-content-center col-12 m-0" id="he">
  <div class="col-12 d-flex justify-content-center">
  <a href="index.php" class="col-6 col-xl-3"><img class="logo col-12" src="VISTA/imagenes/FrikisetasLogo3.png" alt="logo Frikisetas"></a>
  </div>
  </div>
</div>
    <div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center
          min-vh-75 mt-5">
        <div class="col-12 col-md-8 col-lg-4">
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
  </body>
  <script src="VISTA/js/bootstrap.bundle.min.js"></script>
</html>
<?php
		#####################################*/
			//Include required PHPMailer files
			require 'includes/PHPMailer.php';
			require 'includes/SMTP.php';
			require 'includes/Exception.php';
		//Define name spaces
			use PHPMailer\PHPMailer\PHPMailer;
			use PHPMailer\PHPMailer\SMTP;
			use PHPMailer\PHPMailer\Exception;


      if( isset($error) && $error =="0"){
	
					//Create instance of PHPMailer
					$mail = new PHPMailer();
					//Set mailer to use smtp
						$mail->isSMTP();
					//Define smtp host
						$mail->Host = "smtp.gmail.com";
					//Enable smtp authentication
						$mail->SMTPAuth = true;
					//Set smtp encryption type (ssl/tls)
						$mail->SMTPSecure = "tls";
					//Port to connect smtp
						$mail->Port = "587";
					//Set gmail username
						$mail->Username = "frikisetas.soporte@gmail.com";
					//Set gmail password
						$mail->Password = "jpbjcqtldxntwbak";
					//Email subject
						$mail->Subject = "Recuperacion de contraseña";
					//Set sender email
						$mail->setFrom('frikisetas.soporte@gmail.com');
					//Enable HTML
						$mail->isHTML(true);
					//Attachment
						//$mail->addAttachment('img/attachment.png');
					//Email body				
						$mail->Body = "<h1>Solicitud de recuperacion de contraseña</h1></br><p> Hola " . $usuario . " su contraseña es: " . $pass . "</p>";
					//Add recipient A quien se le envia
						$mail->addAddress($email);
					//Finally send email
						 $mail->send();
					//Closing smtp connection
						$mail->smtpClose();
						echo "<script> 
					  if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					  }
						</script>";
					
	  }
