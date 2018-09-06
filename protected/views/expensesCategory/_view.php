<?php
/* @var $this ExpensesCategoryController */
/* @var $data ExpensesCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Expense_category_Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Expense_category_Id), array('view', 'id'=>$data->Expense_category_Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Servity_level')); ?>:</b>
	<?php echo CHtml::encode($data->Servity_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_By')); ?>:</b>
	<?php echo CHtml::encode($data->added_By); ?>
	<br />


</div>