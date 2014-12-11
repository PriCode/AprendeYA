<table>
<tr>

<td><b>Alumno</b></td><td><b>Sesión</b></td><td><b>Descripción de la Sesión</b></td>
</tr>
<?php 
foreach($a as $key){
	echo "<tr><td>".$key['usuario']."</td><td>".$key['sesion']."</td><td>".$key['desc_sesion']."</td></tr>";
}
?>
</table>
