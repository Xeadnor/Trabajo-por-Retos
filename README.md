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
Siguiendo e investigando las normas de accesibilidad WCAG 2.0 para formularios hemos podido implementar todas las siguientes:
<ul>
<li>No limites el tiempo que el usuario dispone para completar un formulario, o dispón de un mecanismo para anular o ampliar el límite de tiempo (G5 - Sufficient [2.2.3 - AAA], G133 - Sufficient [2.2.1 - A], G198 - Sufficient [2.2.1 - A])<li>
El usuario no tiene un tiempo de limite marcado para hacer el formulario.
<li>Indica si un campo es obligatorio en el LABEL asociado al campo, por ejemplo mediante un texto "(obligatorio)" o mediante un asterisco explicando su significado al comienzo del formulario (H90 ? [3.3.2 - A])</li>
Indicamos si un campo es obligatorio al explicar al inicio el formulario que el asterisco * Significa campo obligatorio, y para hacerlo aun mas accesible contamos con labels ocultas con el texto "(nombre de campo) obligatorio" para darle accesibilidad a los que usan lector de pagina
<li>Proporciona descripciones textuales (no un mero asterisco o cambio de color) para identificar los campos obligatorios que no fueron completados (G83 - Sufficient [3.3.1 - A, 3.3.3- AA, 3.3.2 - A], F81)
</li>
 Aparte de indicarlo mediante el asterisco tambien proporcionamos un texto indicando que ese campo es obligatorio si se intenta enviar un formulario sin rellenar el campo en cuestion.
<li>Cuando se produzca un erro de validacion proporcionar una descripcion textual que describa la naturaleza del problema, valores permitidos, ejemplos correctos y localiza el campo que ha provocado el error(G84 - Sufficient [3.3.1 - A, 3.3.3- AA], G85 - Sufficient [3.3.1 - A, 3.3.3 - AA], G139 - Advisory [3.3.1 - A, 3.3.3 - AA], G177 - Sufficient [3.3.3- AA], G194 - Sufficient [3.3.5 - AAA])</li>
Nuestro formulario cuenta con un gran sistema de avisos de validacion, en caso de que el usuario falle un campo, se mostrara un mensaje justo debajo de este con el nombre del campo, indicando cual es el campo erroneo, tambien habra indicaciones de como superar el campo y que valores tiene que introducir.
<li>Debe ser evidente el campo que tiene el foco, por ejemplo el agente de usuario debe mostrar la barra vertical parpadeante en el punto de inserción de contenido de un campo de texto o puntear el contorno de los radios y checks (G149 - Sufficient [2.4.7 - AA])</li>
Cuando un usuario esta sobre un campo, el borde de este se hace mas oscuro que el resto de la pagina para hacer un contraste y sea mas facil encontrarlo.
<li>Cada control de formulario debe tener una etiqueta visible inmediatamente después en el caso de los radios y checks (G162 - Sufficient [3.3.2 - A], F86)</li>
Cada radiobutton o checkbox contiene la informacion al lado, dejando claro que es lo que esta aceptado el usuario al marcar esa opcion
<li>Utiliza elementos LABEL para asociar etiquetas a los controles del formulario. Asócialos de forma explícita (H44 - Sufficient [1.1.1 - A, 1.3.1 - A, 3.3.2 - A, 4.1.2 - A], F86)</li>
Nos hemos enfocado mucho en este punto, nuestro formulario cumple gratamente con los criterios de accesibilidad, ya que hemos añadido labels en todos los campos estando estos asociados, les hemos dado un text-indent=-999em, haciendo que sea invisible en la pagina pero que el lector de paginas lo lea, en el caso como botones que no puede tener un texto integro, usamos el aria-label indicando la caracteristica de ese boton, como por ejemplo "Reset = boton que reinicia todos los campos al estado inicial"
<li>Informa convenientemente de que el formulario se ha enviado con éxito (G199 - Advisory [3.3.1 - A, 3.3.2 -A, 3.3.4- AA, 3.3.6 -AAA])</li>
Cuando el formulario es completado con exito se le muestra al usuario un mensaje facil de visualizar.
<li>Agrupa los OPTIONS de una SELECT mediante OPTGROUP (H85 - Sufficient [1.3.1 - A]</li>

</ul>

<h2>Test actualizados</h2>
Para realizar los test automaticos nos hemos decidido por usar la herramienta Seleneium, para ellos hemos instalado en nuestro navegador la extension de Selenium IDE y creado un nuevo proyecto, lo hemos linkeado a nuestro repositorio donde esta nuestra pagina web con el formulario. Hemos realizado casos de prueba tanto para validaciones como para errores.

Para poder correr estos test es necesario tener Selenium IDE y descargar el archivo que contiene los test, se encuentra en el repositorio en SELENIUM_TEST/testAutomaticosJS.side

Se habre la interfaz de selenium y se selecciona abrir un proyeccto existente. Seleccionamos nuestro archivo descargado.<br>
<img src="https://github.com/Xeadnor/Trabajo-por-Retos/blob/8e35c927cdad7d71e49ad05df77af3fdcb313577/imagenes/selenium.png">

Ya tendremos la interfaz con los diferentes test que podremos correr.<br>
<img src="https://github.com/Xeadnor/Trabajo-por-Retos/blob/4475897f72dce9dfc45e1d10ffc43a3dfa59ccb0/imagenes/test.png" style="width:700px">


