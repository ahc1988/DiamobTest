<?php
/* @var $this BoletinController */
/* @var $model Boletin */

$this->breadcrumbs=array(
	'Boletins'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Boletin', 'url'=>array('index')),
	array('label'=>'Create Boletin', 'url'=>array('create')),
	array('label'=>'Update Boletin', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Boletin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Boletin', 'url'=>array('admin')),
);
?>

<h1>View Boletin #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NOMBRE',
		'DESCRIPCION',
		'ESTILO',
		'FECHA_INICIO',
		'FECHA_FINAL',
	),
)); ?>
