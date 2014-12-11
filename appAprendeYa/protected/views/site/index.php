<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;
?>


<header class="masthead subhead" >
<center>
		    <div class="container">		    
		        <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
				<p>Aqui podras aprender todos los temas de tu interes con los mejores expertos del pais</p>
				<p>Ven y echa un visazo a las proximas sesiones!!!</p>
		    </div>
</center>
</header>

<div class="container" style="width=800px; height=400px;">		    
  <?php  $this->widget('booster.widgets.TbCarousel',
    array(
	    'items' => array(
	    array(
	    'image' => 'assets/img/intro.gif',	    
	    'label' => 'First Thumbnail label',
	    'caption' => 'First Caption.'
	    ),
	    array(
	    'image' => 'assets/img/intro.gif',
	    'label' => 'Second Thumbnail label',
	    'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
	    ),
	    array(
	    'image' => 'assets/img/intro.gif',
	    'label' => 'Third Thumbnail label',
	    'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    	),
		'htmlOptions'=> array('style'=>'width:800px; height:400px;')
    	),
    	

	));

?>
</div>		    






















<h3>Lista de sesiones proximas</h3>

<div>
<table width="210px" border="solid"><thead><td>Titulo</td><td> Descripcion</td></thead>
<?php  	
	$html="";
	foreach ($sesiones as $key) {
		$html.="<tr><td>".$key->titulo_sesion."</td><td>".$key->desc_sesion."</td></tr>"; 	
	}	
	echo $html;
?>
</table>
</div>


<h3>Nuestros  Expertos	</h3>

<div>
<table width="210px" border="solid"><thead><td>Nombre</td><td> Nivel de Actividad</td></thead>
<?php  	
	$html="";
	foreach ($expertos as $experto) {
		$html.="<tr><td>".$experto->id_usuario."</td><td>".$experto->nivel_actividad."</td></tr>"; 	
	}	
	echo $html;
?>
</table>
</div>

<h3>un  Expertos	</h3>
<?php

	echo var_dump($nombre_expertos);

?>









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





