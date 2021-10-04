<?php
include "conexion.php";


$nota=$_SESSION['cia'];
$sqlnotas="SELECT xpp.departamento, AVG(xpn.notafin) promedio
            FROM nota xpn,persona xpp
            WHERE xpn.ci = xpp.ci 
            GROUP BY xpp.departamento";
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
        <td>departamento</td>
 
    </tr>
    </thead>
    <tbody>
<?php
    while($fila=mysqli_fetch_array($querys)){
        echo "<tr>";
        echo "<td>".$fila["departamento"]."</td>";
        echo "<td>".$fila["promedio"]."</td>";

        echo "<tr>";
    }
?>
</tbody>
</table>

