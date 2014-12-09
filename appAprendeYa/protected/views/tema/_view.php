<?php
/* @var $this TemaController */
/* @var $data Tema */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tema')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tema), array('view', 'id'=>$data->id_tema)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrip_tema')); ?>:</b>
	<?php echo CHtml::encode($data->descrip_tema); ?>
	<br />


</div>