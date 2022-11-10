# Trabajo-por-Retos

Grupo 1 formado por : Pablo Sainz, Marta Torres, Irene Merino, Joanna Mateo.


Pagina web desde github pages: https://xeadnor.github.io/Trabajo-por-Retos/


<h2></h2>

<ul>
<li>Nombre y Apellidos (Obligatorio). Compuesto como máximo por dos palabras</li>
<li>Correo electrónico (Obligatorio)</li>
<li>Contraseña de acceso (Obligatorio). Para que sea válida debe tener al menos ocho caracteres y contener al menos una letra minúscula, una mayúscula, un número y un símbolo</li>
<li>Confirmación de contraseña (Obligatorio)</li>
<li>Sexo (Opcional)</li>
<li>Fecha de nacimiento (Opcional)</li>
<li>Dirección (Opcional)</li>
<li>País (Opcional, implementado como un selector)</li>
<li>Número de tarjeta de crédito (Opcional, aparecerá únicamente cuando se indique una dirección completa: campos dirección y país, debe ser un número de tarjeta válido)</li>
<li>Activar notificaciones de la pagina (Casilla de verificación)</li>
<li>Recepción de la revista digital (Casilla de verificación)</li>

Siguiendo lo que se nos pedia hemos realizado el formulario con ayuda del uso de JavaScript añadiendo ciertas consideraciones nuestras que iremos comentando:

Respecto al nombre y apellido son dos input de tipo texto, los cuales son obligatorios a rellenar, no hemos querido usar el "required" debido  a que no cumple toda la accesibilidad posible, para ello usamos la comprobacion de si su length es mayor a 0, tambien comprobamos y validamos que no se escriban mas de dos palabras en cada campo, y que no se admitan números.

El correo electronico es otro campo igual al anterior pero en este la expresion regular es mas compleja, volvemos a comprobrar que esta relleno mediante JavaScript comprobamos que tiene que haber un @, y que tanto detras como adelante de el haya texto, el cual esta comprobado que no sea mayusculas ni caracteres no permitidos en un correo, despues de esto tambien se comprueba que tiene que haber un "." y delante de el texto tambien. Asi comprobraremos el correo electronico correctamente.

La contraseña es un campo parecido tambien, primero comprobamos que tiene que estar rellena otra vez, y una vez es asi comprobamos que cumple con todas las indicaciones que se nos pide en el enunciado mediante el uso de expresiones regulares, ayudamos al usuario a saber que le falta por añadir a su contraseña comprobando varias expresiones regulares y devolviendo una cadena especial para cada caso. Una vez el usuario ha introducido una contraseña valida, se pasa a la segunda parte, comprobar que la contraseña que tiene que repetir es la misma a la primera.

<b>Todos los demas campos que mencionaremos ahora son opcionales, pero eso no quita que si se introduce uno, tiene que ser correcto con la forma en la que se le pida ya que cualquiera que de error no dejara enviar el formulario de registro</b>.

En el campo de sexo hemos realizado un radiobutton con 3 posibles opciones, en el que dejamos como "checked" la 3 opcion, siendo una por default.

Fecha de nacimiento es un campo de tipo date el cual como hemos dicho es opcional, pero si el usuario decide rellenarlo y colocar su fecha de nacimiento, este comprobara que sea mayor de edad, si no es asi se le indicara al usuario.

Direccion es un solo punto que hemos querido desglosar en 4, dos de ellos son "Direccion de la calle/via" y "Poblacion" los cuales admite una cadena de texto sin restriccion de caracteres, la unica restriccion es que no se admiten números en ellos. Hay un campo que es "Bloque,piso,portal" el cual admite todo tipo de caracteres. Por ultimo tenemos un campo que es "Codigo Postal" el cual como su nombre indica el usuario tendra que introducir 5 numeros, esto esta comprobado con maxlenght = 5, pero si se añaden menos, o algun caracter que no sea un numero, tambien saltara una aviso al usuario.

Una vez rellenados todos los campos de direccion se mostrara la parte de formulario de la tarjeta. ( Esta comprobracion la hemos realizado de tal manera que da igual el orden en el que se rellenen los datos de direccion que siempre se mostrara en el ultimo el apartado de tarjeta, de misma manera que si se borra uno de estos apartados, los campos de tarjeta se volveran a ocultar).
La tarjeta la hemos querido dar mas funcionabilidades de las pedidas ya que las veiamos necesarias y bastante enriquecedoras al formulario.
Tenemos un campo "Propietario" el cual el usuario no puede usar numeros. Tenemos otro campo que es el "CVV" el cual es un campo que solo admite 3 caracteres y solo numericos, en el caso de introducir menos o alguna letra se le avisara al usuario. Tenemos un apartado de "fecha de caducidad" de la tarjeta, este campo tiene algo especial ya que lo hemos adaptado para que no haga falta actualizarlo con el paso del tiempo ya que se actualizan solos, aqui tenemos la validacion de que en el caso de que se seleccione como año de caducidad el mismo que el actual, el mes debe ser el mismo o mayor al actual, si no estaria caducada.
Por ultimo tenemos dos campos que se complementan, el numero de tarjeta y el tipo de tarjeta, en el enunciado se pedia que se comprobara un numero de tarjeta y ya, pero hemos querido ir mas lejos y hemos hecho que se pueda elegir con un radiobutton entre 3 tipos de tarjeta, y dependiendo de cual se eliga se hace una comprobacion o otra sobre el numero de tarjeta escogido, cada una cuenta con su expresion regular.

Por ultimo contamos con dos checkbox para las notificaciones y recepción de la revista digital, con una de ellas marcadas por default con "checked".

Por ultimo mencionar como caracteristica, que todos los campos se comprueban por si mismos al introducirlos, es decir, si el usuario introduce un campo y este no es correcto con la forma que debe ser introducido se le avisa al usuario mediante un texto indicando como debe ser la forma correcta, si este lo modifica y es correcta la nueva forma el mensaje se borra. Una vez todos los campos que ha rellenado el usuario, minimo los obligatorios, estan validados, podremos darle al boton de "JOIN" que es el submit, el cual nos mostrara un texto indicando al usuario que este ha completado el registro, mensaje que se borrara si empezamos a crear un nuevo registro o pulsamos el boton de RESET, boton que nos permite vaciar todos los campos.
</ul>


<h2>Accesibilidad</h2>
<ul>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ul>



<h2>Test actualizados</h2>
Para realizar los test automaticos nos hemos decidido por usar la herramienta Seleneium, para ellos hemos instalado en nuestro navegador la extension de Selenium IDE y creado un nuevo proyecto, lo hemos linkeado a nuestro repositorio donde esta nuestra pagina web con el formulario. Hemos realizado casos de prueba tanto para validaciones como para errores.

Para poder correr estos test es necesario tener Selenium IDE y descargar el archivo que contiene los test, se encuentra en el repositorio en SELENIUM_TEST/testAutomaticosJS.side

Se habre la interfaz de selenium y se selecciona abrir un proyeccto existente. Seleccionamos nuestro archivo descargado.<br>
<img src="https://github.com/Xeadnor/Trabajo-por-Retos/blob/8e35c927cdad7d71e49ad05df77af3fdcb313577/imagenes/selenium.png">

Ya tendremos la interfaz con los diferentes test que podremos correr.<br>
<img src="https://github.com/Xeadnor/Trabajo-por-Retos/blob/4475897f72dce9dfc45e1d10ffc43a3dfa59ccb0/imagenes/test.png" style="width:700px">


