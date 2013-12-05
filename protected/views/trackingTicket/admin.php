<?php
/* @var $this TrackingTicketController */
/* @var $model TrackingTicket */

$this->breadcrumbs=array(
	'Tracking Tickets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TrackingTicket', 'url'=>array('index')),
	array('label'=>'Create TrackingTicket', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tracking-ticket-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tracking Tickets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tracking-ticket-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'HORA_GENERACION',
		'RESULTADO',
		'COOKIE',
		'MONTO',
		'FK_CONSUMIDOR',
		/*
		'FK_OFERTA',
		'FK_CASHBACK',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
