<?php
/* @var $this SeverityLevelController */
/* @var $model SeverityLevel */

$this->breadcrumbs=array(
	'Severity Levels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SeverityLevel', 'url'=>array('index')),
	array('label'=>'Manage SeverityLevel', 'url'=>array('admin')),
);
?>

<h1>Create SeverityLevel</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>