<?php
/* @var $this ConsumidorController */
/* @var $data Consumidor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('E_MAIL')); ?>:</b>
	<?php echo CHtml::encode($data->E_MAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_DE_INSCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_DE_INSCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->DIRECCION); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CIUDAD')); ?>:</b>
	<?php echo CHtml::encode($data->CIUDAD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO_PROVINCIA')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO_PROVINCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PAIS')); ?>:</b>
	<?php echo CHtml::encode($data->PAIS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('METODO_REEMBOLSO')); ?>:</b>
	<?php echo CHtml::encode($data->METODO_REEMBOLSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_CONSUMIDOR')); ?>:</b>
	<?php echo CHtml::encode($data->FK_CONSUMIDOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_CASHBACK')); ?>:</b>
	<?php echo CHtml::encode($data->FK_CASHBACK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_SUSCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->FK_SUSCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_TRACKING_TICKET')); ?>:</b>
	<?php echo CHtml::encode($data->FK_TRACKING_TICKET); ?>
	<br />

	*/ ?>

</div>