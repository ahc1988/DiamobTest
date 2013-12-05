<?php
/* @var $this CashbackController */
/* @var $model Cashback */

$this->breadcrumbs=array(
	'Cashbacks'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Cashback', 'url'=>array('index')),
	array('label'=>'Create Cashback', 'url'=>array('create')),
	array('label'=>'Update Cashback', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Cashback', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cashback', 'url'=>array('admin')),
);
?>

<h1>View Cashback #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'APROBADO_EN',
		'SE_HIZO_EFECTIVO',
		'FK_TRACKING_TICJET',
	),
)); ?>
