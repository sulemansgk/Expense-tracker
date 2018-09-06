<?php
/* @var $this IncomeMoneyCategoryController */
/* @var $model IncomeMoneyCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Income_money_name'); ?>
		<?php echo $form->textField($model,'Income_money_name',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_date'); ?>
		<?php echo $form->textField($model,'added_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_By'); ?>
		<?php echo $form->textField($model,'added_By'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'servity_level'); ?>
		<?php echo $form->textField($model,'servity_level'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->