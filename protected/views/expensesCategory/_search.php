<?php
/* @var $this ExpensesCategoryController */
/* @var $model ExpensesCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Expense_category_Id'); ?>
		<?php echo $form->textField($model,'Expense_category_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Servity_level'); ?>
		<?php echo $form->textField($model,'Servity_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_By'); ?>
		<?php echo $form->textField($model,'added_By'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->