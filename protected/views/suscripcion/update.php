<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */

$this->breadcrumbs=array(
	'Suscripcions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Suscripcion', 'url'=>array('index')),
	array('label'=>'Create Suscripcion', 'url'=>array('create')),
	array('label'=>'View Suscripcion', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Suscripcion', 'url'=>array('admin')),
);
?>

<h1>Update Suscripcion <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>