<?php
/* @var $this BudgetCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Budget Categories',
);

$this->menu=array(
	array('label'=>'Create BudgetCategory', 'url'=>array('create')),
	array('label'=>'Manage BudgetCategory', 'url'=>array('admin')),
);
?>

<h1>Budget Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
