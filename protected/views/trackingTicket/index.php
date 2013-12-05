<?php
/* @var $this TrackingTicketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tracking Tickets',
);

$this->menu=array(
	array('label'=>'Create TrackingTicket', 'url'=>array('create')),
	array('label'=>'Manage TrackingTicket', 'url'=>array('admin')),
);
?>

<h1>Tracking Tickets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
