<?php
/* @var $this IncomeMoneyCategoryController */
/* @var $model IncomeMoneyCategory */

$this->breadcrumbs=array(
	'Income Money Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IncomeMoneyCategory', 'url'=>array('index')),
	array('label'=>'Create IncomeMoneyCategory', 'url'=>array('create')),
	array('label'=>'View IncomeMoneyCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IncomeMoneyCategory', 'url'=>array('admin')),
);
?>

<h1>Update IncomeMoneyCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>