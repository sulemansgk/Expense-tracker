<?php
/* @var $this SeverityLevelController */
/* @var $model SeverityLevel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'severity-level-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Severity_level_id'); ?>
		<?php echo $form->textField($model,'Severity_level_id'); ?>
		<?php echo $form->error($model,'Severity_level_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name'); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_date'); ?>
		<?php echo $form->textField($model,'added_date'); ?>
		<?php echo $form->error($model,'added_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_by'); ?>
		<?php echo $form->textField($model,'added_by'); ?>
		<?php echo $form->error($model,'added_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->