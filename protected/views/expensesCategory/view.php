<?php
/* @var $this ExpensesCategoryController */
/* @var $model ExpensesCategory */

$this->breadcrumbs=array(
	'Expenses Categories'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List ExpensesCategory', 'url'=>array('index')),
	array('label'=>'Create ExpensesCategory', 'url'=>array('create')),
	array('label'=>'Update ExpensesCategory', 'url'=>array('update', 'id'=>$model->Expense_category_Id)),
	array('label'=>'Delete ExpensesCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Expense_category_Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExpensesCategory', 'url'=>array('admin')),
);
?>

<h1>View ExpensesCategory #<?php echo $model->Expense_category_Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Expense_category_Id',
		'Name',
		'Servity_level',
		'added_By',
	),
)); ?>
