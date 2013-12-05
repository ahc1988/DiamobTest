<?php
/* @var $this ConsumidorController */
/* @var $model Consumidor */

$this->breadcrumbs=array(
	'Consumidors'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consumidor', 'url'=>array('index')),
	array('label'=>'Create Consumidor', 'url'=>array('create')),
	array('label'=>'View Consumidor', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Consumidor', 'url'=>array('admin')),
);
?>

<h1>Update Consumidor <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>