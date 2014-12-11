<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">	
	<div id="sidebar">

<?php

		 $this->widget('booster.widgets.TbMenu', 
		    				array(
		    				'type' => 'list',
		    				'items' => $this->menu,

/*	    				array(
		    				array('label'=>'Inicio', 'url'=>array('/site/index')),
							array('label'=>'Sesiones', 'url'=>array('/sesion', 'view'=>'admin')),
							array('label'=>'Usuario', 'url'=>array('/usuario', 'view'=>'admin')),
							array('label'=>'Alumnos por Sesión', 'url'=>array('/matricula/test','view'=>'admin')),
							array('label'=>'Expertos por calificación', 'url'=>array('/experto/test','view'=>'admin')),
							array('label'=>'Lista de Alumnos', 'url'=>array('/alumno','view'=>'admin')),								
							array('label'=>'Acerca de nosotros', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contact', 'url'=>array('/site/contact')),				
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
*/
		    	));



			/*'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Sesiones', 'url'=>array('/sesion', 'view'=>'admin')),
				array('label'=>'Usuario', 'url'=>array('/usuario', 'view'=>'admin')),
				array('label'=>'Alumnos por Sesión', 'url'=>array('/matricula/test','view'=>'admin')),
				array('label'=>'Expertos por calificación', 'url'=>array('/experto/test','view'=>'admin')),
				array('label'=>'Lista de Alumnos', 'url'=>array('/alumno','view'=>'admin')),								
				array('label'=>'Acerca de nosotros', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),				
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));
*/

/*
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();*/

	?>



	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>