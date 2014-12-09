<?php
/* @var $this ExpertoController */
/* @var $model Experto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Experto'); ?>
		<?php echo $form->textField($model,'id_Experto',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nivel_actividad'); ?>
		<?php echo $form->textField($model,'nivel_actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nro_sesion'); ?>
		<?php echo $form->textField($model,'nro_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_aceptacion'); ?>
		<?php echo $form->textField($model,'id_aceptacion',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calificacion'); ?>
		<?php echo $form->textField($model,'calificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->