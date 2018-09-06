<?php
/* @var $this IncomeMoneyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Income Moneys',
);

$this->menu=array(
	array('label'=>'Create IncomeMoney', 'url'=>array('create')),
	array('label'=>'Manage IncomeMoney', 'url'=>array('admin')),
);
?>

<h1>Income Moneys</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
