<?php
/* @var $this IncomeMoneyController */
/* @var $data IncomeMoney */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Income_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Income_id), array('view', 'id'=>$data->Income_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Income_name')); ?>:</b>
	<?php echo CHtml::encode($data->Income_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_amount')); ?>:</b>
	<?php echo CHtml::encode($data->income_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('income_category')); ?>:</b>
	<?php echo CHtml::encode($data->income_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Added_date')); ?>:</b>
	<?php echo CHtml::encode($data->Added_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Added_By')); ?>:</b>
	<?php echo CHtml::encode($data->Added_By); ?>
	<br />


</div>