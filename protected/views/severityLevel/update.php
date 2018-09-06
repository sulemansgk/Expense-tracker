<?php
/* @var $this SeverityLevelController */
/* @var $model SeverityLevel */

$this->breadcrumbs=array(
	'Severity Levels'=>array('index'),
	$model->Name=>array('view','id'=>$model->Severity_level_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SeverityLevel', 'url'=>array('index')),
	array('label'=>'Create SeverityLevel', 'url'=>array('create')),
	array('label'=>'View SeverityLevel', 'url'=>array('view', 'id'=>$model->Severity_level_id)),
	array('label'=>'Manage SeverityLevel', 'url'=>array('admin')),
);
?>

<h1>Update SeverityLevel <?php echo $model->Severity_level_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>