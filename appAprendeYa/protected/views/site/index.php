<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>


<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>
<h3>Aqui podras aprender todos los temas de tu interes con los mejores expertos del pais</h3>
<h3>Ven y echa un visazo a las proximas sesiones!!!</h3>
</p>

<p>
	Lista de sesiones proximas

</p>
<?php  
	echo "<table width=\"210px\" border=\"solid\"><thead><td>Experto</td><td>Titulo</td><td> Descripcion</td></thead>";
	foreach ($sesiones as $key) {
		echo "<tr><td>".$key->titulo_sesion."</td><td>".$key->desc_sesion."</td></tr>"; 	
	}
	echo "</table>";
?>



<p>
	Lista de sesiones proximas
</p>








<!--
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>



<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
-->





