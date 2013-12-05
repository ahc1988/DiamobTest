<?php
/* @var $this OfertaController */
/* @var $model Oferta */

$this->breadcrumbs=array(
	'Ofertas'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Oferta', 'url'=>array('index')),
	array('label'=>'Create Oferta', 'url'=>array('create')),
	array('label'=>'View Oferta', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Oferta', 'url'=>array('admin')),
);
?>

<h1>Update Oferta <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>