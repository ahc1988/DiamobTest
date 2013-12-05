<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGEN')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PREVIEW')); ?>:</b>
	<?php echo CHtml::encode($data->PREVIEW); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXCLUSIONS')); ?>:</b>
	<?php echo CHtml::encode($data->EXCLUSIONS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SPECIAL_TERMS')); ?>:</b>
	<?php echo CHtml::encode($data->SPECIAL_TERMS); ?>
	<br />


</div>