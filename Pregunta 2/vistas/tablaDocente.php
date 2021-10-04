<?php
include "conexion.php";


$nota=$_SESSION['cia'];
$sqlnotas="SELECT xp.nombre,xn.Sigla, xn.nota1 ,xn.nota2,xn.nota3, xn.notafin  
           FROM docente xdo, nota xn, usuario xu, persona xp 
           WHERE xdo.ci='$nota' AND xdo.sigla=xn.sigla AND xdo.paralelo=xn.paralelo AND xn.ci=xu.ci AND xu.ci=xp.ci
           ORDER BY xn.Sigla";
$querys = mysqli_query ($conn,$sqlnotas);



?>
<html>
	<head>
		<title>Tabla BD</title>
		<style>
table {
  border-collapse: collapse;
  table-layout: fixed;
  width: 100%;
  background: white;
}

th, td {
  border: 1px solid lightgray;
  padding: 8px; 
  text-align: left;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  
  &:first-child {
    width: 90px;
  }
  &:last-child {
    text-align: right;
    width: 60px;
  }
}

th {
  background: teal;
  color: white;
  text-transform: uppercase;
  font-weight: normal;
}

table tr:first-child td {
  border-top: none;
}

.container {
  background: tan;
  width: 100%;
  padding: 24px;
  height: 300px;
}

.tWrap {
  height: 100%;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  
  &__head {
    flex: 0 0 37px; // for Safari and IE
    overflow-y: scroll;
  }
  
  &__body {
    overflow-y: scroll;
  }
}
		</style>
	</head>


<table>
    <thead>
    <tr>
        <td>Materia</td>
        <td>nombre</td>
        <td>nota1</td>
        <td>nota2</td>
        <td>nota3</td>
        <td>nota final</td>
    </tr>
    </thead>
    <tbody>
<?php
    while($fila=mysqli_fetch_array($querys)){
        echo "<tr>";
        echo "<td>".$fila["Sigla"]."</td>";
        echo "<td>".$fila["nombre"]."</td>";
        echo "<td>".$fila["nota1"]."</td>";
        echo "<td>".$fila["nota2"]."</td>";
        echo "<td>".$fila["nota3"]."</td>";
        echo "<td>".$fila["notafin"]."</td>";
        echo "<tr>";
    }
?>
</tbody>
</table>
