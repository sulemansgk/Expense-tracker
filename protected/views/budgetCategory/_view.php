<?php
/* @var $this BudgetCategoryController */
/* @var $data BudgetCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Budeget_cat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Budeget_cat_id), array('view', 'id'=>$data->Budeget_cat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_date')); ?>:</b>
	<?php echo CHtml::encode($data->added_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />


</div>