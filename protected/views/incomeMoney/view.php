<?php
/* @var $this IncomeMoneyController */
/* @var $model IncomeMoney */

$this->breadcrumbs=array(
	'Income Moneys'=>array('index'),
	$model->Income_id,
);

$this->menu=array(
	array('label'=>'List IncomeMoney', 'url'=>array('index')),
	array('label'=>'Create IncomeMoney', 'url'=>array('create')),
	array('label'=>'Update IncomeMoney', 'url'=>array('update', 'id'=>$model->Income_id)),
	array('label'=>'Delete IncomeMoney', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Income_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IncomeMoney', 'url'=>array('admin')),
);
?>

<h1>View IncomeMoney #<?php echo $model->Income_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Income_id',
		'Income_name',
		'income_amount',
		'income_category',
		'Added_date',
		'Added_By',
	),
)); ?>
