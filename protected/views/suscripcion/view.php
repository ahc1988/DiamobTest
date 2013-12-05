<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */

$this->breadcrumbs=array(
	'Suscripcions'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Suscripcion', 'url'=>array('index')),
	array('label'=>'Create Suscripcion', 'url'=>array('create')),
	array('label'=>'Update Suscripcion', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Suscripcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Suscripcion', 'url'=>array('admin')),
);
?>

<h1>View Suscripcion #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'TIPO',
		'DESCRIPCION',
		'IMAGEN',
		'PERIOCIDAD_ENVIO',
		'FK_BOLETIN',
	),
)); ?>
