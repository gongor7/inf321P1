<html >

<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel= "php" href="conexio.php">


</head>




<body>
    <form class="formulario" method="POST" action="recepform.php">

        
        <div class="contenedor">
        <?php 

            include "conexion.php";

            $sql= "select * from usuario";
            $resultado = mysqli_query ($conn,$sql);

   // print_r($resultado);
            $nombre = $_POST["nombre"];
            $pss = $_POST["pss"];
            echo "Hola".$nombre." ".$pss;


            while   ($fila = mysqli_fetch_array($resultado)){
            //print_r($fila);
            //echo  "<br/> ";    
            if($fila["ci"] == $nombre){
                echo"siiiiii";
                break;
            }
            else{
                echo "npo";
            }
        
            } 
            
        ?>
        </div>
    </form>
</body>

</html>