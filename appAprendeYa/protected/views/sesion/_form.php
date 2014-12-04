<?php
/* @var $this SesionController */
/* @var $model Sesion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sesion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sesion'); ?>
		<?php echo $form->textField($model,'id_sesion',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo_sesion'); ?>
		<?php echo $form->textField($model,'titulo_sesion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'titulo_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc_sesion'); ?>
		<?php echo $form->textField($model,'desc_sesion',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'desc_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_ini'); ?>
		<?php echo $form->textField($model,'hora_ini'); ?>
		<?php echo $form->error($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
		<?php echo $form->error($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_sesion'); ?>
		<?php echo $form->textField($model,'id_tipo_sesion',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_tipo_sesion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tema'); ?>
		<?php echo $form->textField($model,'id_tema',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_tema'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->