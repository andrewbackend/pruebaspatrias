<!-- Confeccionar un problema que muestre una lista de hipervínculos con los distintos signos del horóscopo y luego al ser presionado no recargue la página completa sino que se envíe una petición al servidor y el mismo retorne la información de dicho signo, luego se actualice solo el contenido de un div del archivo HTML. -->


<!DOCTYPE html>
<html>

<head>
  <title>Ejemplo de jQuery</title>
  <meta charset="UTF-8">
  <link rel="StyleSheet" href="estilos.css" type="text/css">
</head>

<body>
  <h1>Signos del horóscopo.</h1>
  <div id="menu">
    <p><a id="enlace1" href="pagina1.php?cod=1">Aries</a></p>
    <p><a id="enlace2" href="pagina1.php?cod=2">Tauro</a></p>
    <p><a id="enlace3" href="pagina1.php?cod=3">Geminis</a></p>
    <p><a id="enlace4" href="pagina1.php?cod=4">Cancer</a></p>
    <p><a id="enlace5" href="pagina1.php?cod=5">Leo</a></p>
    <p><a id="enlace6" href="pagina1.php?cod=6">Virgo</a></p>
    <p><a id="enlace7" href="pagina1.php?cod=7">Libra</a></p>
    <p><a id="enlace8" href="pagina1.php?cod=8">Escorpio</a></p>
    <p><a id="enlace9" href="pagina1.php?cod=9">Sagitario</a></p>
    <p><a id="enlace10" href="pagina1.php?cod=10">Capricornio</a></p>
    <p><a id="enlace11" href="pagina1.php?cod=11">Acuario</a></p>
    <p><a id="enlace12" href="pagina1.php?cod=12">Piscis</a></p>
  </div>
  <div id="detalles">Seleccione su signo.</div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="funciones.js"></script>
</body>

</html>