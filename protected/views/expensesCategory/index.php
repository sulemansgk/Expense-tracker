<?php
/* @var $this ExpensesCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Expenses Categories',
);

$this->menu=array(
	array('label'=>'Create ExpensesCategory', 'url'=>array('create')),
	array('label'=>'Manage ExpensesCategory', 'url'=>array('admin')),
);
?>

<h1>Expenses Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
