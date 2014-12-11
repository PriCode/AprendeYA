<?php
/* @var $this ExpertoController */
/* @var $model Experto */

$this->breadcrumbs=array(
	'Expertos'=>array('index'),
	$model->id_Experto,
);

$this->menu=array(
	array('label'=>'List Experto', 'url'=>array('index')),
	array('label'=>'Create Experto', 'url'=>array('create')),
	array('label'=>'Update Experto', 'url'=>array('update', 'id'=>$model->id_Experto)),
	array('label'=>'Delete Experto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Experto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experto', 'url'=>array('admin')),
);
?>

<h1>View Experto #<?php echo $model->id_Experto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Experto',
		'nivel_actividad',
		'nro_sesion',
		'id_aceptacion',
		'id_usuario',
		'calificacion',
	),
)); ?>
