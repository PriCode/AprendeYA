<?php
/* @var $this TemaController */
/* @var $model Tema */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tema-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tema'); ?>
		<?php echo $form->textField($model,'id_tema',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrip_tema'); ?>
		<?php echo $form->textField($model,'descrip_tema',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'descrip_tema'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->