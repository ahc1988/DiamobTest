<?php
/* @var $this CashbackController */
/* @var $model Cashback */

$this->breadcrumbs=array(
	'Cashbacks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cashback', 'url'=>array('index')),
	array('label'=>'Manage Cashback', 'url'=>array('admin')),
);
?>

<h1>Create Cashback</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>