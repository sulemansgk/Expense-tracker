<?php
/* @var $this IncomeMoneyController */
/* @var $model IncomeMoney */

$this->breadcrumbs=array(
	'Income Moneys'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IncomeMoney', 'url'=>array('index')),
	array('label'=>'Manage IncomeMoney', 'url'=>array('admin')),
);
?>

<h1>Create IncomeMoney</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>