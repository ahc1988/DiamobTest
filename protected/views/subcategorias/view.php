<?php
/* @var $this SubcategoriasController */
/* @var $model Subcategorias */

$this->breadcrumbs=array(
	'Subcategoriases'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Subcategorias', 'url'=>array('index')),
	array('label'=>'Create Subcategorias', 'url'=>array('create')),
	array('label'=>'Update Subcategorias', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Subcategorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subcategorias', 'url'=>array('admin')),
);
?>

<h1>View Subcategorias #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'NOMBRE',
		'DESCRIPCION',
		'FK_CATEGORIA',
	),
)); ?>
