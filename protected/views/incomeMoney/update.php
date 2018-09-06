<?php
/* @var $this IncomeMoneyController */
/* @var $model IncomeMoney */

$this->breadcrumbs=array(
	'Income Moneys'=>array('index'),
	$model->Income_id=>array('view','id'=>$model->Income_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IncomeMoney', 'url'=>array('index')),
	array('label'=>'Create IncomeMoney', 'url'=>array('create')),
	array('label'=>'View IncomeMoney', 'url'=>array('view', 'id'=>$model->Income_id)),
	array('label'=>'Manage IncomeMoney', 'url'=>array('admin')),
);
?>

<h1>Update IncomeMoney <?php echo $model->Income_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>