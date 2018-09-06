<?php
/* @var $this IncomeMoneyCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Income Money Categories',
);

$this->menu=array(
	array('label'=>'Create IncomeMoneyCategory', 'url'=>array('create')),
	array('label'=>'Manage IncomeMoneyCategory', 'url'=>array('admin')),
);
?>

<h1>Income Money Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
