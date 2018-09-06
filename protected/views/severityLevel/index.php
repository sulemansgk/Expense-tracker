<?php
/* @var $this SeverityLevelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Severity Levels',
);

$this->menu=array(
	array('label'=>'Create SeverityLevel', 'url'=>array('create')),
	array('label'=>'Manage SeverityLevel', 'url'=>array('admin')),
);
?>

<h1>Severity Levels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
