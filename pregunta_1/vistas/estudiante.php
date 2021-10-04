<!doctype html>
<html lang="es">
<head>
	 	
	<title>FISICA</title>
	<meta charset="utf-8"/>		
	<link rel="stylesheet" href="../estilos/estiloinicio.css">				 
	<link rel="shortcut icon" href="../imagenes/logo.png" type="image/x-icon">

    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>

<body >
<?php include "header.php"?>

<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>

<div class="cosas"><h4 class="tress">ESTUDIANTE </h4></div>
    <div id="contenedor">
        <div id="slider">
            <div class="elemento">
                <a href="#"><img src="../imagenes/estadistica3.jpg"></a>

            </div>

            <div class="elemento">
                <a href="#"><img src="../imagenes/estadistica2.jpg"></a>

            </div>

            <div class="elemento">
                <a href="#"><img src="../imagenes/estadistica1.jpg"></a>

            </div>
        </div>
    </div>
</div>
    <section>

        
        <div class="uno">
            <h5>Carrera de Estadistica</h5>
            <p>La carrera de Estadística de la Facultad de Ciencias Puras y Naturales de la UMSA, es una unidad académica e investigativa autónoma creada el 15 de octubre de 1984. Es una de las dos únicas unidades de formación de estudiantes en estadística del país, existentes en las ciudades de La Paz y Potosí. Además, tiene la responsabilidad de desarrollar y consolidar el conocimiento científico de la ciencia en estadística al servicio del país.
            <br><br>
Cuenta con un instituto de investigación en estadística denominado IETA (Instituto de Estadística Teórica y Aplicada) que tiene la finalidad de desarrollar la investigación científica en el campo de la estadística coadyuvando al avance de la investigación en diferentes campos del conocimiento humano donde la estadística juega un papel preponderante como ciencia transversal.
</p>

        </div>

    </section>




<footer><span>Creado por Cristhian Leandro Gongora Torrez</span>

</footer>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'></script>	


<script type="text/javascript">//<![CDATA[
$(function(){
$('#slider div:gt(0)').hide();
setInterval(function(){
$('#slider div:first-child').fadeOut(0)
.next('div').fadeIn(1000)
.end().appendTo('#slider');}, 5000);
})
//]]></script>


</body>
</html>