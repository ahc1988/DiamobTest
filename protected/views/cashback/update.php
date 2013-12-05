<?php
/* @var $this CashbackController */
/* @var $model Cashback */

$this->breadcrumbs=array(
	'Cashbacks'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cashback', 'url'=>array('index')),
	array('label'=>'Create Cashback', 'url'=>array('create')),
	array('label'=>'View Cashback', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Cashback', 'url'=>array('admin')),
);
?>

<h1>Update Cashback <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>