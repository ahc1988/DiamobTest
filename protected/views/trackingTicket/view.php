<?php
/* @var $this TrackingTicketController */
/* @var $model TrackingTicket */

$this->breadcrumbs=array(
	'Tracking Tickets'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TrackingTicket', 'url'=>array('index')),
	array('label'=>'Create TrackingTicket', 'url'=>array('create')),
	array('label'=>'Update TrackingTicket', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TrackingTicket', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TrackingTicket', 'url'=>array('admin')),
);
?>

<h1>View TrackingTicket #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'HORA_GENERACION',
		'RESULTADO',
		'COOKIE',
		'MONTO',
		'FK_CONSUMIDOR',
		'FK_OFERTA',
		'FK_CASHBACK',
	),
)); ?>
