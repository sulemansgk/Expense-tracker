<?php
/* @var $this ExpensesCategoryController */
/* @var $model ExpensesCategory */

$this->breadcrumbs=array(
	'Expenses Categories'=>array('index'),
	$model->Name=>array('view','id'=>$model->Expense_category_Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExpensesCategory', 'url'=>array('index')),
	array('label'=>'Create ExpensesCategory', 'url'=>array('create')),
	array('label'=>'View ExpensesCategory', 'url'=>array('view', 'id'=>$model->Expense_category_Id)),
	array('label'=>'Manage ExpensesCategory', 'url'=>array('admin')),
);
?>

<h1>Update ExpensesCategory <?php echo $model->Expense_category_Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>