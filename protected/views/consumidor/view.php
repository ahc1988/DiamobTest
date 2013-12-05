<?php
/* @var $this ConsumidorController */
/* @var $model Consumidor */

$this->breadcrumbs=array(
	'Consumidors'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Consumidor', 'url'=>array('index')),
	array('label'=>'Create Consumidor', 'url'=>array('create')),
	array('label'=>'Update Consumidor', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Consumidor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consumidor', 'url'=>array('admin')),
);
?>

<h1>View Consumidor #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NOMBRE',
		'APELLIDO',
		'E_MAIL',
		'USERNAME',
		'FECHA_DE_INSCRIPCION',
		'DIRECCION',
		'CIUDAD',
		'ESTADO_PROVINCIA',
		'PAIS',
		'METODO_REEMBOLSO',
		'FK_CONSUMIDOR',
		'FK_CASHBACK',
		'FK_SUSCRIPCION',
		'FK_TRACKING_TICKET',
	),
)); ?>
