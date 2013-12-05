<?php
/* @var $this SubcategoriasController */
/* @var $model Subcategorias */

$this->breadcrumbs=array(
	'Subcategoriases'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Subcategorias', 'url'=>array('index')),
	array('label'=>'Create Subcategorias', 'url'=>array('create')),
	array('label'=>'View Subcategorias', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Subcategorias', 'url'=>array('admin')),
);
?>

<h1>Update Subcategorias <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>