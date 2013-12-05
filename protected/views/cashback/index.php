<?php
/* @var $this CashbackController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cashbacks',
);

$this->menu=array(
	array('label'=>'Create Cashback', 'url'=>array('create')),
	array('label'=>'Manage Cashback', 'url'=>array('admin')),
);
?>

<h1>Cashbacks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
