<?php
/* @var $this IncomeMoneyCategoryController */
/* @var $data IncomeMoneyCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Income_money_name')); ?>:</b>
	<?php echo CHtml::encode($data->Income_money_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_date')); ?>:</b>
	<?php echo CHtml::encode($data->added_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_By')); ?>:</b>
	<?php echo CHtml::encode($data->added_By); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servity_level')); ?>:</b>
	<?php echo CHtml::encode($data->servity_level); ?>
	<br />


</div>