<?php
/* @var $this IncomeMoneyCategoryController */
/* @var $model IncomeMoneyCategory */

$this->breadcrumbs=array(
	'Income Money Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IncomeMoneyCategory', 'url'=>array('index')),
	array('label'=>'Create IncomeMoneyCategory', 'url'=>array('create')),
	array('label'=>'Update IncomeMoneyCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IncomeMoneyCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IncomeMoneyCategory', 'url'=>array('admin')),
);
?>

<h1>View IncomeMoneyCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Income_money_name',
		'added_date',
		'added_By',
		'servity_level',
	),
)); ?>
