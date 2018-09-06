<?php
/* @var $this IncomeMoneyCategoryController */
/* @var $model IncomeMoneyCategory */

$this->breadcrumbs=array(
	'Income Money Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IncomeMoneyCategory', 'url'=>array('index')),
	array('label'=>'Manage IncomeMoneyCategory', 'url'=>array('admin')),
);
?>

<h1>Create IncomeMoneyCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>