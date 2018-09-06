<?php
/* @var $this BudgetCategoryController */
/* @var $model BudgetCategory */

$this->breadcrumbs=array(
	'Budget Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BudgetCategory', 'url'=>array('index')),
	array('label'=>'Create BudgetCategory', 'url'=>array('create')),
	array('label'=>'Update BudgetCategory', 'url'=>array('update', 'id'=>$model->Budeget_cat_id)),
	array('label'=>'Delete BudgetCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Budeget_cat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BudgetCategory', 'url'=>array('admin')),
);
?>

<h1>View BudgetCategory #<?php echo $model->Budeget_cat_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Budeget_cat_id',
		'name',
		'added_date',
		'Description',
	),
)); ?>
