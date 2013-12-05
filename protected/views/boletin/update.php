<?php
/* @var $this BoletinController */
/* @var $model Boletin */

$this->breadcrumbs=array(
	'Boletins'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Boletin', 'url'=>array('index')),
	array('label'=>'Create Boletin', 'url'=>array('create')),
	array('label'=>'View Boletin', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Boletin', 'url'=>array('admin')),
);
?>

<h1>Update Boletin <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>