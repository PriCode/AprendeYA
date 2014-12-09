<h1> Alumnos por Curso</h1>

<div>
	<table style="width:100%">
		<tr>
		<td>Codigo_Usuario</td><td>Sesion</td>
		</tr>
  			<?php foreach ($a as $key ) {
				echo "<tr>";
				echo "<td>".$key->id_alumno."</td>";
				echo "<td>".$key->id_sesion."</td>";
				echo "</tr>";
			}?>	
	</table>
</div>