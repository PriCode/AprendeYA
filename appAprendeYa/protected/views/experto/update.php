<?php
/* @var $this ExpertoController */
/* @var $model Experto */

$this->breadcrumbs=array(
	'Expertos'=>array('index'),
	$model->id_Experto=>array('view','id'=>$model->id_Experto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experto', 'url'=>array('index')),
	array('label'=>'Create Experto', 'url'=>array('create')),
	array('label'=>'View Experto', 'url'=>array('view', 'id'=>$model->id_Experto)),
	array('label'=>'Manage Experto', 'url'=>array('admin')),
);
?>

<h1>Update Experto <?php echo $model->id_Experto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>