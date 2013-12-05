<?php
/* @var $this TrackingTicketController */
/* @var $model TrackingTicket */

$this->breadcrumbs=array(
	'Tracking Tickets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TrackingTicket', 'url'=>array('index')),
	array('label'=>'Manage TrackingTicket', 'url'=>array('admin')),
);
?>

<h1>Create TrackingTicket</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>