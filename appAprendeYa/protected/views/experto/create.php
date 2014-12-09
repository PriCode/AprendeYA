<?php
/* @var $this ExpertoController */
/* @var $model Experto */

$this->breadcrumbs=array(
	'Expertos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Experto', 'url'=>array('index')),
	array('label'=>'Manage Experto', 'url'=>array('admin')),
);
?>

<h1>Create Experto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>