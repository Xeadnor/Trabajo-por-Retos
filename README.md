# Trabajo-por-Retos

Grupo 1 formado por : Pablo Sainz, Marta Torres, Irene Merino, Joanna Mateo.


Pagina web desde github pages: https://xeadnor.github.io/Trabajo-por-Retos/


<h2>Caracteristicas del formulario</h2>

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

Respecto al nombre y apellido son dos input de tipo texto, los cuales son obligatorios, no hemos querido usar el "required" debido  a que no cumple toda la accesibilidad posible, para ello usamos la comprobacion de si que length sea mayor 0, también comprobamos y validamos que no se escriban más de dos palabras en cada campo (ya que se pedía así), y que no se admitan números.

El correo electrónico es otro campo igual al anterior pero en este la expresión regular es más compleja, volvemos a comprobrar que está relleno mediante JavaScript comprobamos que tiene que haber un @, y que tanto detras como adelante de el haya texto, el cual está comprobado que no sea mayúsculas ni caracteres no permitidos en un correo, después de ésto también se comprueba que tiene que haber un "." y detrás de el texto también. Así comprobraremos el correo electrónico correctamente.

La contraseña es un campo parecido también, primero comprobamos que tiene que estar rellena, y una vez es así comprobamos que cumple con todas las indicaciones que se nos pide en el enunciado mediante el uso de expresiones regulares, ayudamos al usuario a saber que le falta por añadir a su contraseña comprobando parte por parte con expresiones regulares y devolviendo una cadena especial para cada caso (ej:"La contraseña debe incluir al menos un número"). Una vez el usuario ha introducido una contraseña válida, se pasa a la segunda parte, comprobar que la contraseña que tiene que repetir es la misma a la primera.

<b>Todos los demás campos que mencionaremos ahora son opcionales, pero eso no quita que si se introduce uno, tiene que ser correcto con la forma en la que se le pida ya que cualquiera que de error no dejará enviar el formulario de registro</b>.

En el campo de sexo hemos realizado un radiobutton con 3 posibles opciones, en el que dejamos como "checked" la 3 opción, siendo una por con vaolor default.

Fecha de nacimiento es un campo de tipo date el cual como hemos dicho es opcional, pero si el usuario decide rellenarlo y colocar su fecha de nacimiento, este comprobará que sea mayor de edad, si no es así se le indicará al usuario.

Dirección es un sólo punto que hemos querido desglosar en 4, dos de ellos son "Direccion de la calle/via" y "Población" los cuales admite una cadena de texto con la restricción de que no se admiten números en ellos. Hay un campo que es "Bloque,piso,portal" el cuál admite todo tipo de caracteres. Por último tenemos un campo que es "Código Postal" el cuál como su nombre indica el usuario tendra que introducir 5 números, esto está comprobado con maxlenght = 5, pero si se añaden menos, o algún caracter que no sea un numérico, también saltará un aviso al usuario.

Una vez rellenados todos los campos de dirección se mostrará la parte de formulario de la tarjeta. ( Esta comprobración la hemos realizado de tal manera que da igual el orden en el que se rellenen los datos de dirección que siempre se mostrará al rellenar el último el apartado de tarjeta, de misma manera que si se borra uno de éstos apartados, los campos de tarjeta se volverán a ocultar).
A la tarjeta la hemos querido dar mas comprobaciones de las pedidas ya que las veíamos necesarias y bastante enriquecedoras para el formulario.
 Los cammpos son los siguientes:
- Campo "Propietario" el cual no permite introducir numeros, saltará el error de que no es váido. 
- Campo "CVV" el cual sólo admite 3 caracteres y sólo numéricos, en el caso de introducir menos números o alguna letra se le avisará al usuario. 
- Campo "fecha de caducidad" de la tarjeta, éste campo tiene algo especial ya que lo hemos adaptado para que no haga falta actualizarlo con el paso del tiempo ya que se actualizan solos (calculando sobre el año actual cuatro años más que es el máximo que permiten las tarjetas de crédito/débito), aquí tenemos la validación de que en el caso de que se seleccione como año de caducidad el mismo que el actual, el mes debe ser el mismo o mayor al actual, si no saltará el aviso de que la tarjeta está caducada.
- Por último tenemos dos campos que se complementan, el numero de tarjeta y el tipo de tarjeta, en el enunciado se pedia que se comprobara un numero de tarjeta y ya, pero hemos querido ir más lejos y hemos hecho que se pueda elegir con un radiobutton entre 3 tipos de tarjeta, y dependiendo de cuál se elija se hace una comprobación u otra sobre el numero de tarjeta escogido, cada una cuenta con su expresion regular. Es decir si se selecciona de tipo de tarjeta VISA, la comprobación del número de tarjeta se realiazará con una expresión regular propia para VISA.

Por último contamos con dos checkbox para las notificaciones y recepción de la revista digital, con una de ellas marcadas por defecto con "checked".

Por último mencionar como característica, que todos los campos se comprueban por si mismos al introducirlos, es decir, si el usuario introduce un campo y éste no es correcto (no cumple la validación) se le avisa al usuario mediante un texto indicando cómo debe ser la forma correcta, si este lo modifica y es correcto el mensaje se borra. Una que el usuario ha rellenado todos los campos (mínimo los obligatorios) y están validados correctamente, podremos darle al boton de "JOIN" que es el submit, el cual nos mostrará un texto indicando al usuario que ha completado el registro (esto reseteará todos los campos de formulario), mensaje que se borrará si empezamos a crear un nuevo registro o pulsamos el boton de RESET.
 
Hemos considerado necesario añadir a los campos de texto un límite con maxlenght para evitar que se puedan introducir textos demasiado largos y evitar así también la posibilidad de inyección SQL o de URLs que puedan dañar la base de datos y la aplicación.
</ul>


<h2>Accesibilidad</h2>
Siguiendo e investigando las normas de accesibilidad WCAG 2.0 para formularios hemos podido implementar todas las siguientes:
<ul>
<li>No limites el tiempo que el usuario dispone para completar un formulario, o dispón de un mecanismo para anular o ampliar el límite de tiempo (G5 - Sufficient [2.2.3 - AAA], G133 - Sufficient [2.2.1 - A], G198 - Sufficient [2.2.1 - A])<li>
El usuario no tiene un tiempo límite marcado para completar el formulario.

<li>Indica si un campo es obligatorio en el LABEL asociado al campo, por ejemplo mediante un texto "(obligatorio)" o mediante un asterisco explicando su significado al comienzo del formulario (H90 ? [3.3.2 - A])</li>
Indicamos si un campo es obligatorio al indicar al inicio del formulario que lo campos con asterisco "*" son campos obligatorios, y para hacerlo aún más accesible contamos con labels ocultas con el texto "(nombre de campo) obligatorio" para darle accesibilidad a los que usan lína braille (los lectores de página leerán tanto el label como el placeholder).
<li>Proporciona descripciones textuales (no un mero asterisco o cambio de color) para identificar los campos obligatorios que no fueron completados (G83 - Sufficient [3.3.1 - A, 3.3.3- AA, 3.3.2 - A], F81)
</li>
Aparte de indicarlo mediante el asterisco también proporcionamos un texto (mensaje de error en la validación) indicando que ese campo es obligatorio si se intenta enviar un formulario sin rellenar el campo en cuestion. (Se muestra en la imagen más abajo)
<li>Cuando se produzca un error de validación proporcionar una descripción textual que describa la naturaleza del problema, valores permitidos, ejemplos correctos y localiza el campo que ha provocado el error(G84 - Sufficient [3.3.1 - A, 3.3.3- AA], G85 - Sufficient [3.3.1 - A, 3.3.3 - AA], G139 - Advisory [3.3.1 - A, 3.3.3 - AA], G177 - Sufficient [3.3.3- AA], G194 - Sufficient [3.3.5 - AAA])</li>
Nuestro formulario cuenta con un gran sistema de avisos de validación, en caso de que el usuario falle un campo, se mostrará un mensaje justo debajo de éste con el nombre del campo, indicando cual es el campo erróneo, también habrá indicaciones de cómo superar el campo y que valores tiene que introducir.</li>
 <img src="https://github.com/Xeadnor/Trabajo-por-Retos/blob/d54a548a580720f305ab06c2d88816ae1c7c3edd/imagenes/Errores_validacion.JPG" style="width: 400px"></img>
 
<li>Debe ser evidente el campo que tiene el foco, por ejemplo el agente de usuario debe mostrar la barra vertical parpadeante en el punto de inserción de contenido de un campo de texto o puntear el contorno de los radios y checks (G149 - Sufficient [2.4.7 - AA])</li>
Cuando un usuario está sobre uno de los campos del formulario, el borde de éste se vuelve más oscuro que el resto de los campos de la página para hacer un contraste y sea más fácil localizar el campo actual.
<li>Cada control de formulario debe tener una etiqueta visible inmediatamente después en el caso de los radios y checks (G162 - Sufficient [3.3.2 - A], F86)</li>
Cada radiobutton o checkbox contiene la información justo al lado, dejando claro que es lo que está aceptado o indicando el usuario al marcar esa opción.
<li>Utiliza elementos LABEL para asociar etiquetas a los controles del formulario. Asócialos de forma explícita (H44 - Sufficient [1.1.1 - A, 1.3.1 - A, 3.3.2 - A, 4.1.2 - A], F86)</li>
Nos hemos enfocado mucho en este punto, nuestro formulario cumple gratamente con los criterios de accesibilidad, ya que hemos añadido labels asociados en todos los campos, les hemos dado un <b>text-indent=-999em</b>, haciendo que sea invisible en la página pero permitiendo que tanto el lector de páginas como la línea braille los puedan leer, en el caso de botones que no puede tener un texto íntegro, usamos el aria-label indicando la caracteristica de ese botón, como por ejemplo "Reset = botón que reinicia todos los campos al estado inicial".
<li>Informa convenientemente de que el formulario se ha enviado con éxito (G199 - Advisory [3.3.1 - A, 3.3.2 -A, 3.3.4- AA, 3.3.6 -AAA])</li>
Cuando el formulario es completado con exito se le muestra al usuario un mensaje facil de visualizar.

<img src="https://github.com/Xeadnor/Trabajo-por-Retos/blob/b4ca3990c526d4cf724f02f3954b920dde34785a/imagenes/formularioCorrecto.JPG" style="width: 400px"></img> 

<li>Agrupa los OPTIONS de una SELECT mediante OPTGROUP (H85 - Sufficient [1.3.1 - A]</li> En el campo select de paises,hemos realizado una separación por continentes para que sea más fácil localizar un país y por tanto más accesible.

</ul>

<h2>Test actualizados</h2>
Para realizar los test automáticos nos hemos decidido por usar la herramienta Selenium IDE, para ellos hemos instalado en nuestro navegador la extensión y creado un nuevo proyecto, lo hemos linkeado a nuestro repositorio donde está nuestra página web con el formulario. Hemos realizado casos de prueba tanto para validaciones como para errores.

Para poder correr estos test es necesario tener Selenium IDE y descargar el archivo que contiene los test, se encuentra en el repositorio en SELENIUM_TEST/testAutomaticosJS.side

Se habre la interfaz de selenium y se selecciona abrir un proyecto existente. Seleccionamos nuestro archivo descargado.<br>
<img src="https://github.com/Xeadnor/Trabajo-por-Retos/blob/8e35c927cdad7d71e49ad05df77af3fdcb313577/imagenes/selenium.png">

Ya tendremos la interfaz con los diferentes test que podremos correr.<br>


https://user-images.githubusercontent.com/104887544/201320504-99b51f92-fc0a-44da-b13f-6734666875fb.mp4



