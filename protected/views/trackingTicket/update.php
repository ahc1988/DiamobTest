<?php
/* @var $this TrackingTicketController */
/* @var $model TrackingTicket */

$this->breadcrumbs=array(
	'Tracking Tickets'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TrackingTicket', 'url'=>array('index')),
	array('label'=>'Create TrackingTicket', 'url'=>array('create')),
	array('label'=>'View TrackingTicket', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TrackingTicket', 'url'=>array('admin')),
);
?>

<h1>Update TrackingTicket <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>