<?php
include "conexion.php";


    session_start();
    $nombre=$_SESSION['cia'];
    //$nombre_U=;
    $sqla= "SELECT nombre FROM Usuario u,persona p WHERE u.ci='$nombre' AND p.ci=u.ci ";
    $querys = mysqli_query ($conn,$sqla);
    $data = mysqli_fetch_array($querys);



    if (empty($_SESSION['active'])) {
       header ('location:login.php');
    }


?>


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
<header>

<!-- ICONO de la pagina   -->
    <figure><img src="../imagenes/logo.png"></figure>
    <h2>FCPN </h2>
    <nav>
	<!-- menu de opciones   -->
        <ul>

            
            <li><a href="../vistas/salir.php">cerrar_sesion</a></li>
            

        </ul>


    </nav>
</header>

<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>

<div class="cosas"><h4 class="tress"><?php echo $_SESSION['usuari'].': '.$data['nombre'];   ?> </h4></div>
    
</div>
    <section>

        
        <div class="uno">
            <h5>Carrera de Estadistica</h5>
            <p>
            <?php include "tablaEstudiante.php"?>
            </p>

        </div>

    </section>
</body>
</html>