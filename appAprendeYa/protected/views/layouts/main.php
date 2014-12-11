<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">		

	<div id="mainmenu">
		<?php 

				    echo CHtml::openTag('div');
				    	$this->widget( 'booster.widgets.TbNavbar',
							    array(
							    'type'=>'inverse',							   							    
							    'brand'=>'Aprende-Ya',
							    'brandOptions' => array('style' => 'width:auto;margin-left: 0px;'),
							    'fixed' => 'top',
							    'fluid' => true,
							    'htmlOptions' => array('style' => 'position:relative; top:15px;'),
							    'items' => array(
							    array(
							    'class' => 'booster.widgets.TbMenu',
							    'type' => 'navbar',
							    'items' => array(
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
				    			)))));

				echo CHtml::closeTag('div');
 ?>
	</div><!-- mainmenu -->
		


	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<div class="container">
			<?php echo $content; ?>
	</div>

	<div class="clear"></div>



<footer class="footer">
    <div class="container">
        <p class="powered">
            Powered by <a target="_blank" href="http://www.yiiframework.com/extension/bootstrap">Yii-Bootstrap</a>
        </p>Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/></p>
    </div>
</footer>
	
</div><!-- page -->

</body>
</html>
