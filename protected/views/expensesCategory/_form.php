<?php
/* @var $this ExpensesCategoryController */
/* @var $model ExpensesCategory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expenses-category-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Expense_category_Id'); ?>
		<?php echo $form->textField($model,'Expense_category_Id'); ?>
		<?php echo $form->error($model,'Expense_category_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Servity_level'); ?>
		<?php echo $form->textField($model,'Servity_level'); ?>
		<?php echo $form->error($model,'Servity_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_By'); ?>
		<?php echo $form->textField($model,'added_By'); ?>
		<?php echo $form->error($model,'added_By'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->