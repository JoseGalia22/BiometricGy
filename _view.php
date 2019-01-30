<?php
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcliente), array('view', 'id'=>$data->idcliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de nacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechanac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mes pago')); ?>:</b>
	<?php echo CHtml::encode($data->mensuentrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activo hasta')); ?>:</b>
	<?php echo CHtml::encode($data->mensuvencimiento); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('Miembro desde')); ?>:</b>
	<?php echo CHtml::encode($data->miembro); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	*/ ?>

</div>