<?php
/* @var $this ExpensesController */
/* @var $model Expenses */

$this->breadcrumbs=array(
	'Expenses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Expenses', 'url'=>array('index')),
	array('label'=>'Create Expenses', 'url'=>array('create')),
	array('label'=>'Update Expenses', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Expenses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expenses', 'url'=>array('admin')),
);
?>

<h1>View Expenses #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'Amount',
		'Description',
		'Category',
		'Addtional',
		'Photo',
		'Date',
		'U_id',
	),
)); ?>
