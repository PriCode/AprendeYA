<?php
/* @var $this ExpertoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expertos',
);

$this->menu=array(
	array('label'=>'Create Experto', 'url'=>array('create')),
	array('label'=>'Manage Experto', 'url'=>array('admin')),
);
?>

<h1>Expertos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
