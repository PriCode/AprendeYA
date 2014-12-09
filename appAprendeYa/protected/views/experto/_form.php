<?php
/* @var $this ExpertoController */
/* @var $model Experto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Experto'); ?>
		<?php echo $form->textField($model,'id_Experto',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_Experto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nivel_actividad'); ?>
		<?php echo $form->textField($model,'nivel_actividad'); ?>
		<?php echo $form->error($model,'nivel_actividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nro_sesion'); ?>
		<?php echo $form->textField($model,'nro_sesion'); ?>
		<?php echo $form->error($model,'nro_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_aceptacion'); ?>
		<?php echo $form->textField($model,'id_aceptacion',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_aceptacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calificacion'); ?>
		<?php echo $form->textField($model,'calificacion'); ?>
		<?php echo $form->error($model,'calificacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->