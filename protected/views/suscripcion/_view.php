<?php
/* @var $this SuscripcionController */
/* @var $data Suscripcion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGEN')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERIOCIDAD_ENVIO')); ?>:</b>
	<?php echo CHtml::encode($data->PERIOCIDAD_ENVIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_BOLETIN')); ?>:</b>
	<?php echo CHtml::encode($data->FK_BOLETIN); ?>
	<br />


</div>