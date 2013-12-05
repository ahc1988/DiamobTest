<?php
/* @var $this ConsumidorController */
/* @var $model Consumidor */

$this->breadcrumbs=array(
	'Consumidors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consumidor', 'url'=>array('index')),
	array('label'=>'Manage Consumidor', 'url'=>array('admin')),
);
?>

<h1>Create Consumidor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>