<?php
/* @var $this TrackingTicketController */
/* @var $data TrackingTicket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORA_GENERACION')); ?>:</b>
	<?php echo CHtml::encode($data->HORA_GENERACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESULTADO')); ?>:</b>
	<?php echo CHtml::encode($data->RESULTADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COOKIE')); ?>:</b>
	<?php echo CHtml::encode($data->COOKIE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MONTO')); ?>:</b>
	<?php echo CHtml::encode($data->MONTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_CONSUMIDOR')); ?>:</b>
	<?php echo CHtml::encode($data->FK_CONSUMIDOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_OFERTA')); ?>:</b>
	<?php echo CHtml::encode($data->FK_OFERTA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('FK_CASHBACK')); ?>:</b>
	<?php echo CHtml::encode($data->FK_CASHBACK); ?>
	<br />

	*/ ?>

</div>