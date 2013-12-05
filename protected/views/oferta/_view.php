<?php
/* @var $this OfertaController */
/* @var $data Oferta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CASHBACK_PORCENTAJE')); ?>:</b>
	<?php echo CHtml::encode($data->CASHBACK_PORCENTAJE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CASHBACK_FIJO')); ?>:</b>
	<?php echo CHtml::encode($data->CASHBACK_FIJO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMISION_PORCENTAJE')); ?>:</b>
	<?php echo CHtml::encode($data->COMISION_PORCENTAJE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMISION_FIJA')); ?>:</b>
	<?php echo CHtml::encode($data->COMISION_FIJA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_INICIO')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_INICIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_FINAL')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_FINAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_EMPRESA')); ?>:</b>
	<?php echo CHtml::encode($data->FK_EMPRESA); ?>
	<br />

	*/ ?>

</div>