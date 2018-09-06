<?php
/* @var $this BudgetCategoryController */
/* @var $model BudgetCategory */

$this->breadcrumbs=array(
	'Budget Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->Budeget_cat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BudgetCategory', 'url'=>array('index')),
	array('label'=>'Create BudgetCategory', 'url'=>array('create')),
	array('label'=>'View BudgetCategory', 'url'=>array('view', 'id'=>$model->Budeget_cat_id)),
	array('label'=>'Manage BudgetCategory', 'url'=>array('admin')),
);
?>

<h1>Update BudgetCategory <?php echo $model->Budeget_cat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>