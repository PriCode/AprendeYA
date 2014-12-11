<table>
<tr>

<td><b>Experto</b></td><td><b>Calificación</b></td>
</tr>
<?php 
foreach($a as $key){
		foreach($key as $b){
		echo "<tr><td>".$b['usuario']."</td><td>".$b['calificacion']."</td></tr>";}
	}

?>
</table>
