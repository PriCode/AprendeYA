<?php
/* @var $this SesionController */
/* @var $model Sesion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_sesion'); ?>
		<?php echo $form->textField($model,'id_sesion',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo_sesion'); ?>
		<?php echo $form->textField($model,'titulo_sesion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc_sesion'); ?>
		<?php echo $form->textField($model,'desc_sesion',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_ini'); ?>
		<?php echo $form->textField($model,'hora_ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_sesion'); ?>
		<?php echo $form->textField($model,'id_tipo_sesion',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tema'); ?>
		<?php echo $form->textField($model,'id_tema',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->