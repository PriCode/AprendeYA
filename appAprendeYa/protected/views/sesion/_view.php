<?php
/* @var $this SesionController */
/* @var $data Sesion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sesion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sesion), array('view', 'id'=>$data->id_sesion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo_sesion')); ?>:</b>
	<?php echo CHtml::encode($data->titulo_sesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc_sesion')); ?>:</b>
	<?php echo CHtml::encode($data->desc_sesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_ini')); ?>:</b>
	<?php echo CHtml::encode($data->hora_ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_fin')); ?>:</b>
	<?php echo CHtml::encode($data->hora_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_sesion')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_sesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tema')); ?>:</b>
	<?php echo CHtml::encode($data->id_tema); ?>
	<br />

	*/ ?>

</div>