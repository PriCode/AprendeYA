<h1> Lista de Alumnos</h1>

<div>
	<table style="width:100%">
		<tr>
		<td>Codigo_Usuario</td><td>Sesion</td>
		</tr>
  			<?php foreach ($a as $key ) {
				echo "<tr>";
				echo "<td>".$key->usuario."</td>";
				echo "<td>".$key->dni."</td>";
				echo "</tr>";
			}?>	
	</table>
</div>