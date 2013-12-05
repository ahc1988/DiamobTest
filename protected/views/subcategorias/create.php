<?php
/* @var $this SubcategoriasController */
/* @var $model Subcategorias */

$this->breadcrumbs=array(
	'Subcategoriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Subcategorias', 'url'=>array('index')),
	array('label'=>'Manage Subcategorias', 'url'=>array('admin')),
);
?>

<h1>Create Subcategorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>