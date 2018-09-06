<?php
/* @var $this SeverityLevelController */
/* @var $data SeverityLevel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Severity_level_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Severity_level_id), array('view', 'id'=>$data->Severity_level_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_date')); ?>:</b>
	<?php echo CHtml::encode($data->added_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_by')); ?>:</b>
	<?php echo CHtml::encode($data->added_by); ?>
	<br />


</div>