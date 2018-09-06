<?php
/* @var $this ExpensesCategoryController */
/* @var $model ExpensesCategory */

$this->breadcrumbs=array(
	'Expenses Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExpensesCategory', 'url'=>array('index')),
	array('label'=>'Manage ExpensesCategory', 'url'=>array('admin')),
);
?>

<h1>Create ExpensesCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>