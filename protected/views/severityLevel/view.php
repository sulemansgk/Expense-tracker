<?php
/* @var $this SeverityLevelController */
/* @var $model SeverityLevel */

$this->breadcrumbs=array(
	'Severity Levels'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List SeverityLevel', 'url'=>array('index')),
	array('label'=>'Create SeverityLevel', 'url'=>array('create')),
	array('label'=>'Update SeverityLevel', 'url'=>array('update', 'id'=>$model->Severity_level_id)),
	array('label'=>'Delete SeverityLevel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Severity_level_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SeverityLevel', 'url'=>array('admin')),
);
?>

<h1>View SeverityLevel #<?php echo $model->Severity_level_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Severity_level_id',
		'Name',
		'added_date',
		'added_by',
	),
)); ?>
