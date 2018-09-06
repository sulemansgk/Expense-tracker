<?php
/* @var $this BudgetCategoryController */
/* @var $model BudgetCategory */

$this->breadcrumbs=array(
	'Budget Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BudgetCategory', 'url'=>array('index')),
	array('label'=>'Manage BudgetCategory', 'url'=>array('admin')),
);
?>

<h1>Create BudgetCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>