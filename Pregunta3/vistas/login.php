<?php
include "conexion.php";

$alert = '';
session_start();

if (!empty ($SESION['active'])) {
    
    header('location: estudiante.php ');
}
else{    

    if (!empty($_POST)){
        if (empty($_POST['nombre']) || empty($_POST['pss']) ){
            $alert = "Ingrese su usuario y su clave";
        }   
        else{
        
            $user = $_POST['nombre'];
            $pss = $_POST['pss'];

            $sql= "select * FROM usuario WHERE ci='$user' AND user_password='$pss' ";
            $query = mysqli_query ($conn,$sql);

            $resultado = mysqli_num_rows ($query);

            if ($resultado > 0) {
            
                $data = mysqli_fetch_array($query);

                
                $_SESSION['active']=true;
                $_SESSION['cia']=$data['ci'];
                $_SESSION['usuari']=$data['Usuario'];
                
                if ($_SESSION['usuari']=='alumno') {
                   header('location: estudiante.php ');
                }else{
                    header('location: Docente.php ');
                }
                
            
            }
            else{
                $alert = "El usuario o su clave son incorrectos";
                session_destroy();
            }   

        }
    }
}
?>

<html >

<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../estilos/estilo.css">
    


</head>

<body>
    <form class="formulario" method="POST" action="">

        <h1>Login</h1>
        
        <div class="contenedor">

       

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="CI" name="nombre" value="">

            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="pss" value="">

            </div>
       
            <input type="submit" enviar="Entrar" value ="enviar" class="button"  >
            
            <p class="alert" > <?php echo isset($alert) ? $alert : ''; ?></p>
            <p><a class="link" href="../index.php">volver </a></p>
            
           
            
        </div>
        
    </form>
</body>

</html>