<!DOCTYPE html>
  <?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frikisetas</title>
    <link rel="stylesheet" href="../styleLanding.css">
    <meta http-equiv="Expires" content="0">
      
<meta http-equiv="Last-Modified" content="0">
 
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
 
<meta http-equiv="Pragma" content="no-cache">
</head>
<body id="body">
    <div id="imagenes" style="display:none">
        <img id="a1" src="imagenes/superman.png" value="superman.png" onclick="choose(this)">
        <img id="a2" src="imagenes/batman.png" value="batman.png" onclick="choose(this)">
        <img id="a3" src="imagenes/superwoman.png" value="superwoman.png" onclick="choose(this)">
        <img id="a4" src="imagenes/robin.png" value="robin.png" onclick="choose(this)">
        <img id="a5" src="imagenes/spiderman.png" value="spiderman.png" onclick="choose(this)">
        <img id="a6" src="imagenes/capitanamerica.png" value="capitanamerica.png" onclick="choose(this)">
        <img id="a7" src="imagenes/elastigirl.png" value="elastigirl.png" onclick="choose(this)">
        <img id="a8" src="imagenes/ironman.png" value="ironman.png" onclick="choose(this)">
        <img id="a9" src="imagenes/blackwidow.png" value="blackwidow.png" onclick="choose(this)">
        <img id="a10" src="imagenes/flash.png" value="flash.png" onclick="choose(this)">

    </div>
    <header id="headerLogo">
        <div id="logo1">
            <a href="../index.php"><img id="logo" src="imagenes/FrikisetasLogo2.png" alt="logo Frikisetas"></a>
            
        </div>
        <div id="logo2">
            <a href="Landing.php"><img id="seta" src="imagenes/seta.png" alt="logo Frikisetas"></a>
        </div> 
        
        <div id="m1">
            <a href=""><img id="menu" src="imagenes/Menu.png" alt="menu"></a>
        </div>
        
    </header>
    <main>
    <div id="cabecera">
        <div id="manchas">
            <img id="mancha" src="imagenes/Manchas.png" alt="">
        </div>
        <div id="tcabecera">
            <p>¿QUIERES UN 5% DE DESCUENTO EN TU PRIMER PEDIDO?</p>
        </div>
    </div>

    <div id="fgancho">
        <p>¡ÚNETE A NUESTRO MULTIVERSO!</p>
    </div>
    <div id="posicion">
        <div id="formulario">
            
        <form id="form" action="../index.php" method="POST">
        <p id="identidad">Tranquil@ no revelaremos tu identidad</p>      
            <p id="obligatorio">*Campos obligatorios</p>
            <div id="ni">
                <label for="nick" hidden>Nick obligatorio</label>
            <input type="text" id="nick" name="nick" placeholder="Nick de Usuario*" size="30" maxlength="30" value="<?php echo $_SESSION['Registro']["nick"] ?? '' ?>"> 

                <div id="avatar" style="background-image: url('imagenes/<?php echo $_SESSION['Registro']["nombreImg"] ?? '' ?> ');background-size: 100% 100%;">
                    <p id="avatarP"> <?php  if(isset($_SESSION['Registro']["nombreImg"])&& $_SESSION['Registro']["nombreImg"]  !== ""){ 
                    }else{
                        echo "Seleccionar avatar";
                    } ?></p>
                </div>
                
            </div>
            <div id="r20">
                <p id="v20"></p>
            </div> 
            
            <div id="np">
            <label for="nombre" style="text-indent:-999em">Nombre obligatorio</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre*" size="30" maxlength="30" value="<?php echo $_SESSION['Registro']["nombre"] ?? '' ?>"> 
        
            
                <label for="apellidos"  alt="apellidos" style="text-indent:-999em">Apellido obligatorio</label> 
                <input type="text" id="apellidos" name="apellidos"  placeholder="Apellidos*" maxlength="30" value="<?php echo $_SESSION['Registro']["apellidos"] ?? '' ?>" >
            
            </div>
            <div id="r1">
                <p id="v1"></p><p id="v2"></p>
            </div>
            <div id="email">
            <label for="mail" style="text-indent:-999em"> mail obligatorio</label>
            <input type="email" id="mail" name="email" placeholder="E-mail*" maxlength="40" value="<?php echo $_SESSION['Registro']["email"] ?? '' ?>">
            </div>
            <div id="r2">
                <p id="v3"></p>
            </div> 
            <div id="date">
                <div id="contenidos">
                    <label for="fecha">Cumpleaños</label>
                    <input type="date" id="fecha" name="cumple" placeholder="dd/mm/yyyy" value="<?php echo $_SESSION['Registro']["cumple"] ?? '' ?>">
                </div>
                <p id="opcionsexo"> <label for="sexo" id="tsexo">¿Cómo te defines?</label></br>
                    <input type="radio" id="sexo" name="sexo" value="mujer" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["sexo"] == "mujer"){echo "checked";}?>> Superheroina<br>
                    <input type="radio" id="sexo" name="sexo" value="hombre" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["sexo"] == "hombre"){echo "checked";}?>> Superhéroe<br>
                    <input type="radio" id="sexo" name="sexo" value="otro" <?php if(!isset($_SESSION["Registro"])){echo "checked";}if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["sexo"] == "otro"){echo "checked";} ?>> Prefiero no decirlo
            </p>
                </div>
                <div id="r3">
                    <p id="v4"></p>
                </div> 
                <div id="contra">
                    <label for="contrasena1" style="text-indent:-999em" >Contraseña obligatorio</label>
                    <input id="contrasena1" type="password" name="password"  placeholder="Contraseña*" maxlength="20" value="<?php echo $_SESSION['Registro']["password"] ?? '' ?>">
                    <label for="contrasena2" style="text-indent:-999em">Repetir contraseña</label>
                    <input id="contrasena2" type="password" name="password2"  placeholder="Repetir contraseña*" maxlength="20" value="<?php echo $_SESSION['Registro']["password2"] ?? '' ?>">
                </div>
                <div id="r4">
                    <p id="v5"></p>
                </div> 
                <div id="adress">
                    <label for="direccion1" style="text-indent:-999em" >Dirección de la calle/vía</label>
                    <input tpye="text" id="direccion1" name="dir1"  placeholder="Dirección de la calle/vía" maxlength="50" value="<?php echo $_SESSION['Registro']["dir1"] ?? '' ?>"></textarea>
                    <div id="r5">
                        <p id="v6"></p>
                    </div> 
                    <label for="direccion2" style="text-indent:-999em">Bloque,piso, portal...</label>
                    <input type="text" id="direccion2" name="dir2" placeholder="Bloque,piso, portal..." maxlength="30" value="<?php echo $_SESSION['Registro']["dir2"] ?? '' ?>"></textarea></br>
                    <label for="direccion3" style="text-indent:-999em">Población</label>
                    <input type="text" id="direccion3" name="dir3" placeholder="Población" maxlength="30" value="<?php echo $_SESSION['Registro']["dir3"] ?? '' ?>"></textarea>
                    <div id="r6">
                        <p id="v7"></p>
                    </div> 
                     <div id="adress2">
                    <label for="direccion4" style="text-indent:-999em">Código Postal</label>  
                     <input type="text" name="dir4" id="direccion4" placeholder="Código Postal" maxlength="5" value="<?php echo $_SESSION['Registro']["dir4"] ?? '' ?>"> 
                    <select name="pais" id="pais" selected="DZ">
                        <option value="Ninguno">Seleccione el país</option>
                        <optgroup label="Asia">
                            <option value="AF" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AF"){echo "selected";}?>>Afganistán</option>
                            <option value="AM" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AM"){echo "selected";}?>>Armenia</option>
                            <option value="AZ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AZ"){echo "selected";}?>>Azerbaiyán</option>
                            <option value="BH" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BH"){echo "selected";}?>>Bahréin</option>
                            <option value="BD" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BD"){echo "selected";}?>>Bangladesh</option>
                            <option value="KH" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "KH"){echo "selected";}?>>Camboya</option>
                            <option value="CY" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CY"){echo "selected";}?>>Chipre</option>
                            <option value="GE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "GE"){echo "selected";}?>>Georgia</option>
                            <option value="HK" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "HK"){echo "selected";}?>>Hong Kong</option>
                            <option value="IN" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "IN"){echo "selected";}?>>India</option>
                            <option value="ID" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "ID"){echo "selected";}?>>Indonesia</option>
                            <option value="IR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "IR"){echo "selected";}?>>Irán</option>
                            <option value="IQ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "IQ"){echo "selected";}?>>Irak</option>
                            <option value="IL" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "IL"){echo "selected";}?>>Israel</option>
                            <option value="JP" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "JP"){echo "selected";}?>>Japón</option>
                            <option value="JO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "JO"){echo "selected";}?>>Jordán</option>
                            <option value="KZ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "KZ"){echo "selected";}?>>Kazajstán</option>
                            <option value="KP" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "KP"){echo "selected";}?>>Corea del Norte</option>
                            <option value="KR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "KR"){echo "selected";}?>>Corea del Sur</option>
                            <option value="MY" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MY"){echo "selected";}?>>Malasia</option>
                            <option value="PK" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "PK"){echo "selected";}?>>Pakistán</option>
                            <option value="PH" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "PH"){echo "selected";}?>>Filipinas</option>
                            <option value="RU" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "RU"){echo "selected";}?>>Federación Rusa</option>
                            <option value="SA" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SA"){echo "selected";}?>>Arabia Saudita</option>
                            <option value="SY" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SY"){echo "selected";}?>>República Árabe Siria</option>
                            <option value="TH" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "TH"){echo "selected";}?>>Tailandia</option>
                            <option value="AE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AE"){echo "selected";}?>>Emiratos Árabes Unidos</option>
                            <option value="VN" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "VN"){echo "selected";}?>>Vietnam</option>
                         </optgroup>
                         <optgroup label="America del norte">
                            <option value="CA" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CA"){echo "selected";}?>>Canadá</option>
                            <option value="CR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CR"){echo "selected";}?>>Costa Rica</option>
                            <option value="CU" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CU"){echo "selected";}?>>Cuba</option>
                            <option value="DO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "DO"){echo "selected";}?>>República Dominicana</option>
                            <option value="SV" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SV"){echo "selected";}?>>El Salvador</option>
                            <option value="GT" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "GT"){echo "selected";}?>>Guatemala</option>
                            <option value="HN" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "HN"){echo "selected";}?>>Honduras</option>
                            <option value="JM" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "JM"){echo "selected";}?>>Jamaica</option>
                            <option value="MX" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MX"){echo "selected";}?>>México</option>
                            <option value="US" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "US"){echo "selected";}?>>Estados Unidos</option>
                         </optgroup>
                    
                         <optgroup label="America del sur">
                            <option value="AR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AR"){echo "selected";}?>>Argentina</option>
                            <option value="BO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BO"){echo "selected";}?>>Bolivia</option>
                            <option value="BR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BR"){echo "selected";}?>>Brasil</option>
                            <option value="CL" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CL"){echo "selected";}?>>Chile</option>
                            <option value="CO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CO"){echo "selected";}?>>Colombia</option>
                            <option value="EC" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "EC"){echo "selected";}?>>Ecuador</option>
                            <option value="PY" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "PY"){echo "selected";}?>>Paraguay</option>
                            <option value="PE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "PE"){echo "selected";}?>>Perú</option>
                            <option value="UY" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "UY"){echo "selected";}?>>Uruguay</option>
                            <option value="VE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "VE"){echo "selected";}?>>Venezuela</option>
                         </optgroup>
                         <optgroup label="África">
                            <option value="DZ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "DZ"){echo "selected";}?>>Argelia</option>
                            <option value="AO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AO"){echo "selected";}?>>Angola</option>
                            <option value="CM" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CM"){echo "selected";}?>>Camerún</option>
                            <option value="CV" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CV"){echo "selected";}?>>Cabo Verde</option>
                            <option value="CF" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CF"){echo "selected";}?>>República Centroafricana</option>
                            <option value="TD" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "TD"){echo "selected";}?>>Chad</option>
                            <option value="CG" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CG"){echo "selected";}?>>Congo</option>
                            <option value="CD" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CD"){echo "selected";}?>>Congo, República Democrática del Congo</option>
                            <option value="CI" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CI"){echo "selected";}?>>Costa de Marfil</option>
                            <option value="EG" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "EG"){echo "selected";}?>>Egipto</option>
                            <option value="GQ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "QG"){echo "selected";}?>>Guinea Ecuatorial</option>
                            <option value="ET" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "ET"){echo "selected";}?>>Etiopía</option>
                            <option value="GH" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "GH"){echo "selected";}?>>Ghana</option>
                            <option value="GN" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "GN"){echo "selected";}?>>Guinea</option>
                            <option value="KE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "KE"){echo "selected";}?>>Kenia</option>
                            <option value="LS" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "LS"){echo "selected";}?>>Lesoto</option>
                            <option value="MA" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MA"){echo "selected";}?>>Marruecos</option>
                            <option value="MZ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MZ"){echo "selected";}?>>Mozambique</option>
                            <option value="NE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "NE"){echo "selected";}?>>Níger</option>
                            <option value="NG" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "NG"){echo "selected";}?>>Nigeria</option>
                            <option value="SN" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SN"){echo "selected";}?>>Senegal</option>
                            <option value="SO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SO"){echo "selected";}?>>Somalia</option>
                            <option value="ZA" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "ZA"){echo "selected";}?>>Sudáfrica</option>
                            <option value="SS" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SS"){echo "selected";}?>>Sudán del Sur</option>
                            <option value="SD" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SD"){echo "selected";}?>>Sudán</option>
                            <option value="TN" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "TN"){echo "selected";}?>>Túnez</option>
                            <option value="UG" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "UG"){echo "selected";}?>>Uganda</option>
                            <option value="ZW" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "ZW"){echo "selected";}?>>Zimbabue</option>
                         </optgroup>
                         <optgroup label="Europa">
                            <option value="AL" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AL"){echo "selected";}?>>Albania</option>
                            <option value="AD" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AD"){echo "selected";}?>>Andorra</option>
                            <option value="AT" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AT"){echo "selected";}?>>Austria</option>
                            <option value="BY" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BY"){echo "selected";}?>>Bielorrusia</option>
                            <option value="BE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BE"){echo "selected";}?>>Bélgica</option>
                            <option value="BA" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BA"){echo "selected";}?>>Bosnia y Herzegovina</option>
                            <option value="BG" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "BG"){echo "selected";}?>>Bulgaria</option>
                            <option value="HR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "HR"){echo "selected";}?>>Croacia</option>
                            <option value="CZ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CZ"){echo "selected";}?>>Republica checa</option>
                            <option value="DK" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "DK"){echo "selected";}?>>Dinamarca</option>
                            <option value="EE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "EE"){echo "selected";}?>>Estonia</option>
                            <option value="FI" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "FI"){echo "selected";}?>>Finlandia</option>
                            <option value="FR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "FR"){echo "selected";}?>>Francia</option>
                            <option value="DE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "DE"){echo "selected";}?>>Alemania</option>
                            <option value="GI" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "GI"){echo "selected";}?>>Gibraltar</option>
                            <option value="GR" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "GR"){echo "selected";}?>>Grecia</option>
                            <option value="HU" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "HU"){echo "selected";}?>>Hungría</option>
                            <option value="IS" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "IS"){echo "selected";}?>>Islandia</option>
                            <option value="IE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "IE"){echo "selected";}?>>Irlanda</option>
                            <option value="IT" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "IT"){echo "selected";}?>>Italia</option>
                            <option value="JE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "JE"){echo "selected";}?>>Jersey</option>
                            <option value="XK" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "XK"){echo "selected";}?>>Kosovo</option>
                            <option value="LV" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "LV"){echo "selected";}?>>Letonia</option>
                            <option value="LI" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "LI"){echo "selected";}?>>Liechtenstein</option>
                            <option value="LT" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "LT"){echo "selected";}?>>Lituania</option>
                            <option value="LU" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "LU"){echo "selected";}?>>Luxemburgo</option>
                            <option value="MK" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MK"){echo "selected";}?>>Macedonia</option>
                            <option value="MT" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MT"){echo "selected";}?>>Malta</option>
                            <option value="MD" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MD"){echo "selected";}?>>Moldavia</option>
                            <option value="MC" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "MC"){echo "selected";}?>>Mónaco</option>
                            <option value="ME" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "ME"){echo "selected";}?>>Montenegro</option>
                            <option value="NL" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "NL"){echo "selected";}?>>Países Bajos</option>
                            <option value="NO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "NO"){echo "selected";}?>>Noruega</option>
                            <option value="PL" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "PL"){echo "selected";}?>>Polonia</option>
                            <option value="PT" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "PT"){echo "selected";}?>>Portugal</option>
                            <option value="RO" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "RO"){echo "selected";}?>>Rumania</option>
                            <option value="RS" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "RS"){echo "selected";}?>>Serbia</option>
                            <option value="CS" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CS"){echo "selected";}?>>Serbia y Montenegro</option>
                            <option value="SK" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SK"){echo "selected";}?>>Eslovaquia</option>
                            <option value="SI" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SI"){echo "selected";}?>>Eslovenia</option>
                            <option value="ES" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "ES"){echo "selected";}?>>España</option>
                            <option value="SE" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "SE"){echo "selected";}?>>Suecia</option>
                            <option value="CH" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "CH"){echo "selected";}?>>Suiza</option>
                            <option value="UA" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "UA"){echo "selected";}?>>Ucrania</option>
                            <option value="GB" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "GB"){echo "selected";}?>>Reino Unido</option>
                        </optgroup>   
                        <optgroup label="Oceania">
                            <option value="AU" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "AU"){echo "selected";}?>>Australia</option>
                            <option value="NZ" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["pais"] == "NZ"){echo "selected";}?>>Nueva Zelanda</option>
                        </optgroup>
                        
                        
                        
                    </select>
                    <div id="r7">
                        <p id="v8"></p>
                    </div> 
                </div>
                </div>
                <div id="tarjeta" <?php if(isset($_SESSION["Registro"]["dir1"]) && isset($_SESSION["Registro"]["dir2"])
                    && isset($_SESSION["Registro"]["dir3"]) && isset($_SESSION["Registro"]["dir4"]) && $_SESSION["Registro"]["pais"] != "Ninguno" ){ echo "style='display: inline;'";}?>>
                    <h2 id="h2t">Datos de tarjeta</h2>
                        <label for="owner" hidden>Propietario</label>
                        <input type="text" name="owner" id="owner" placeholder="Propietario" maxlength="30" value="<?php echo $_SESSION['Registro']["owner"] ?? '' ?>">
                        <div id="r11">
                            <p id="v11"></p>
                        </div> 
                    
                        <label for="cvv" hidden>CVV</label>
                        <input type="text" name="cvv" id="cvv" placeholder="CVV" maxlength="3" value="<?php echo $_SESSION['Registro']["cvv"] ?? '' ?>">
                        <div id="r12">
                            <p id="v12"></p>
                        </div> 
                   
                        <label for="cardNumber" hidden>Número de tarjeta</label>
                        <input type="text" name="cardNumber" id="cardNumber" placeholder="Número de tarjeta" value="<?php echo $_SESSION['Registro']["cardNumber"] ?? '' ?>">
                   
                        <p id="lt">Fecha de caducidad</p>
                        <div id="fCaducidad">
                        <label for="mesCaducidad" style="text-indent:-999em">Mes de caducidad</label>
                        <select name="mesCaducidad" id="mesCaducidad">
                            <option value="0" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 0){echo "selected";}?>>Enero</option>
                            <option value="1" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 1){echo "selected";}?>>Febrero </option>
                            <option value="2" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 2){echo "selected";}?>>Marzo</option>
                            <option value="3" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 3){echo "selected";}?>>Abril</option>
                            <option value="4" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 4){echo "selected";}?>>Mayo</option>
                            <option value="5" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 5){echo "selected";}?>>Junio</option>
                            <option value="6" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 6){echo "selected";}?>>Julio</option>
                            <option value="7" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 7){echo "selected";}?>>Agosto</option>
                            <option value="8" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 8){echo "selected";}?>>Septiembre</option>
                            <option value="9" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 9){echo "selected";}?>>Octubre</option>
                            <option value="10" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 10){echo "selected";}?>>Noviembre</option>
                            <option value="11" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["mesCaducidad"] == 11){echo "selected";}?>>Diciembre</option>
                        </select>
                        <label for="ayoCaducidad" style="text-indent:-999em">Año de caducidad</label>
                        <select name="añoCaducidad" id="ayoCaducidad">
                            <option value="Ninguno">Elegir año </option>
                            <option value="0" id="ty" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["añoCaducidad"] == 0){echo "selected";}?> > </option>
                            <option value="1" id="t1" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["añoCaducidad"] == 1){echo "selected";}?>> </option>
                            <option value="2" id="t2" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["añoCaducidad"] == 2){echo "selected";}?> > </option>
                            <option value="3" id="t3" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["añoCaducidad"] == 3){echo "selected";}?>> </option>
                            <option value="4" id="t4" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["añoCaducidad"] == 4){echo "selected";}?>> </option>
                       


                        </select>
                    
                        </div>
                        <div id="r13">
                            <p id="v13"></p>
                        </div> 
                        <div id="tarjetas">
                          <label for= "bTarjeta" hidden> Elegir tipo tarjeta</label>  
                         <div id="dtarjeta1"><input type="radio" id="bTarjeta" name="tipotarjeta" value="visa"  <?php if(!isset($_SESSION["Registro"])){echo "checked";}if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["tipotarjeta"] == "visa"){echo "checked";} ?>>  <img src="imagenes/visa.png" id="visa" alt="imagen visa"></div>
                         <div id="dtarjeta2"><input type="radio" id="bTarjeta" name="tipotarjeta" value="mastercard" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["tipotarjeta"] == "mastercard"){echo "checked";}?>>  <img src="imagenes/mastercard.png" id="mastercard" alt="imagen mastercard"></div>
                         <div id="dtarjeta3"><input type="radio" id="bTarjeta" name="tipotarjeta" value="amex" <?php if(isset($_SESSION["Registro"]) && $_SESSION["Registro"]["tipotarjeta"] == "amex"){echo "checked";}?>> <img src="imagenes/amex.png" id="amex" alt="imagen amex"></div>
                        </div>
                        <div id="r8">
                            <p id="v9"></p>
                        </div> 
                </div>
                    <div id="noti">
                        <input type="checkbox" name="notificaciones" id="notificaciones" value="1" <?php if(isset($_SESSION["Registro"]["notificaciones"]) && $_SESSION["Registro"]["notificaciones"] == 1){echo "checked";}?>><label for="notificaciones"><p id="hn2">Activar notificaciones de la página.</p></label>
                    </div>
                    <div id="letter">
                        <input type="checkbox" name="newsletter" id="newsletter" value="1" checked><label for="newsletter"><p id="hn">Deseo recibir la newsletter semanal con las novedades de la página.</p></label>
                    </div>
                    
                
               
                
            <input id="nombreImg" name="nombreImg" type="hidden" value="<?php echo $_SESSION['Registro']["nombreImg"] ?? '' ?>">
            <input id="boton" type="submit" value="JOIN!" name="btnregistro" aria-label="Enviar cuestionario"> </br>
            <input id="reset" type="reset" value="RESET" aria-label="Resetear datos del cuestionario"> 
      
            <?php    unset($_SESSION["Registro"]) ?>


            <div id="r10">
                <p id="v10">
                </p>
            </div>
            <?php 
if(isset($_GET["error"])){
    if($_GET["error"] == 0){
    echo "<p id='red'> El correo y el nick ya han sido utilizado </p>";
    echo "<script> 
document.getElementById('red').scrollIntoView();
</script>";
}elseif($_GET["error"] == 1){
    echo "<p id='red'> El nick ya ha sido utilizado </p>";
    echo "<script> 
document.getElementById('red').scrollIntoView();
</script>";
}elseif($_GET["error"] == 2){
    echo "<p id='red'> El correo ya ha sido utilizado </p>";
    echo "<script> 
document.getElementById('red').scrollIntoView();
</script>";
}
} ?>
        </form>
        </div>
        <div id="camis">
            <img id="orgullo" src="imagenes/yeah.png" alt="orgullo">
            <img id="camisetas" src="imagenes/camisetas.png" alt="camisetas">
        </div>
    </div>
    <div id="descuentos">
        <p>Al unirte a nosotros accederas a descuentos especiales por tu cumpleaños
            y serás el primero en enterarse de nuestras promociones especiales y
            otros beneficios de pertenercer a nuestra liga de la justicia
        </p>
    </div>

    <div id="diy">
        <div id="imgdiy">
            <img id="cdiy" src="imagenes/CamisetaDIY.png" alt="camiDIY">
        </div>
        <div id="tdiy">
            <p>Además puedes crear tus propios diseños en nuestra sección</p>
            <img id="custom" src="imagenes/Custom.png" alt="custom">
        </div>
    </div>

    <div id="opiniones">
        <img id="opinion" src="imagenes/opiniones.png" alt="opiniones">
    </div>
    <div id="detalles">
        <img id="d1" src="imagenes/detalleFondo.png" alt="d1">
        <img id="d2" src="imagenes/detalleFondo2.png" alt="d2">
    </div>

    <footer>
        <div id="RRSS">
            <a href=""><img id="fb" src="imagenes/Facebook.png" alt="facebook"></a>
            <a href=""><img id="ig" src="imagenes/ig.png" alt="ig"></a>
            <a href=""><img id="tt" src="imagenes/Tiktok.png" alt="tiktok"></a>
            <a href=""><img id="tw" src="imagenes/Twitter.png" alt="twitter"></a>
            
        </div>
        <div id="dtfooter">
            <p>INFO@FRIKISETAS.COM</br>665 35 19 16 </p>
        </div>

    </footer>
    </main>
    <script src="../JS/validacionJS.js"></script>
</body>
</html>
