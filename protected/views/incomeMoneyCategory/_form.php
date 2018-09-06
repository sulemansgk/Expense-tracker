<?php
/* @var $this IncomeMoneyCategoryController */
/* @var $model IncomeMoneyCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'income-money-category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Income_money_name'); ?>
		<?php echo $form->textField($model,'Income_money_name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'Income_money_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_date'); ?>
		<?php echo $form->textField($model,'added_date'); ?>
		<?php echo $form->error($model,'added_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_By'); ?>
		<?php echo $form->textField($model,'added_By'); ?>
		<?php echo $form->error($model,'added_By'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'servity_level'); ?>
		<?php echo $form->textField($model,'servity_level'); ?>
		<?php echo $form->error($model,'servity_level'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->