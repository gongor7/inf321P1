<!doctype html>
<html lang="es">
<head>
	 	
	<title>FACULTAD DE CIENCIAS PURAS Y NATURALES INFORMATICA</title>
	<meta charset="utf-8"/>		
	<link rel="stylesheet" href="estilos/estiloinicio.css">				 
	<link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">

    <title>Home</title>
    <link rel="stylesheet" href="main.css">
</head>

<body >


<header>

<!-- ICONO de la pagina   -->
    <figure><img src="imagenes/logo.png"></figure>
    <h2>FCPN </h2>
    <nav>
	<!-- menu de opciones   -->
        <ul>
            <li><a class="icon-fire" href="index.php">Inicio</a></li>
            <li><a class="icon-heart" href="vistas/informatica.php">Informatica</a></li>
            <li><a class="icon-note-beamed" href="vistas/fisica.php">Fisica</a></li>
            <li><a class="icon-list-add" href="vistas/estadistica.php">Estadistica</a></li>
            <li><a class="icon-popup" href="vistas/login.php">iniciar_sesion</a></li>

        </ul>


    </nav>
</header>

<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>

<div class="cosas"><h4 class="tress">FACULTAD DE CIENCIAS PURAS Y NATURALES  </h4></div>
    <div id="contenedor">
        <div id="slider">
            <div class="elemento">
                <a href="#"><img src="imagenes/principal.png"></a>

            </div>

            <div class="elemento">
                <a href="#"><img src="imagenes/alumnos.png"></a>

            </div>

            <div class="elemento">
                <a href="#"><img src="imagenes/facultad.jpg"></a>

            </div>
        </div>
    </div>
</div>
    <section>

        
        <div class="uno">
            <h5>Curso Preuniversitario</h5>
            <p>La Facultad de Ciencias Puras Naturales tiene las siguientes modalidades de ingreso de acuerdo a las normativas universitarias: Prueba de suficiencia académica (PSA), Curso preuniversitario (CPU), Modalidad especial: olimpiadas (local, departamental, nacional e internacional), mejores estudiantes de municipios, personas con capacidades especiales. En sus 6 carreras: Biología, Estadística, Física, Informática, Matemática y Cs. Químicas.
            <br>
El curso Preuniversitario tiene como objetivos:
<br>

Recordar, actualizar y fortalecer conocimientos de materias básicas<br>
(adquiridas en el ciclo secundario) necesarias para el desarrollo formativo en la Facultad.<br>
Fortalecer aptitudes, actitudes y habilidades para realizar los estudios superiores.<br>
Introducir al conocimiento de métodos didácticos y técnicas de investigación y de estudio.<br>
Inducir al conocimiento de la estructura y funcionamiento de la Universidad, la Facultad y la Carrera de su elección.<br>
Contribuir a superar el criterio individualista y memorístico del modelo tradicional del proceso de enseñanza-aprendizje, incentivando a que en el  conocimiento se integre teoría y práctica.
Generar un espíritu crítico y productivo de la realidad social e institucional.<br>
Atender a los requerimientos de regiones, provincias o localidades del departamento de La Paz, cuando las condiciones de densidad de población, importancias relativa o demanda social asi lo justifiquen; a través de medios virtuales.</p>


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
