<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario'); ?>
		<?php echo $form->textField($model,'usuario',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo'); ?>
		<?php echo $form->textField($model,'id_tipo',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'id_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pass'); ?>
		<?php echo $form->textField($model,'id_pass',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_perfil'); ?>
		<?php echo $form->textField($model,'id_perfil',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'id_perfil'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->