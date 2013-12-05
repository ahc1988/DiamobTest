<?php
/* @var $this OfertaController */
/* @var $model Oferta */

$this->breadcrumbs=array(
	'Ofertas'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Oferta', 'url'=>array('index')),
	array('label'=>'Create Oferta', 'url'=>array('create')),
	array('label'=>'Update Oferta', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Oferta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Oferta', 'url'=>array('admin')),
);
?>

<h1>View Oferta #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NOMBRE',
		'DESCRIPCION',
		'CASHBACK_PORCENTAJE',
		'CASHBACK_FIJO',
		'COMISION_PORCENTAJE',
		'COMISION_FIJA',
		'FECHA_INICIO',
		'FECHA_FINAL',
		'FK_EMPRESA',
	),
)); ?>
