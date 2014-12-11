<?php
/* @var $this ExpertoController */
/* @var $data Experto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Experto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Experto), array('view', 'id'=>$data->id_Experto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivel_actividad')); ?>:</b>
	<?php echo CHtml::encode($data->nivel_actividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nro_sesion')); ?>:</b>
	<?php echo CHtml::encode($data->nro_sesion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aceptacion')); ?>:</b>
	<?php echo CHtml::encode($data->id_aceptacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calificacion')); ?>:</b>
	<?php echo CHtml::encode($data->calificacion); ?>
	<br />


</div>