<?php
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcliente'); ?>
		<?php echo $form->textField($model,'idcliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha de nacimiento'); ?>
		<?php echo $form->textField($model,'fechanac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mes pago'); ?>
		<?php echo $form->textField($model,'mensuentrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Activo hasta'); ?>
		<?php echo $form->textField($model,'mensuvencimiento'); ?>
	</div>
    <div class="row">
		<?php echo $form->label($model,'Miembro desde'); ?>
		<?php echo $form->textField($model,'miembro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cedula'); ?>
		<?php echo $form->textField($model,'cedula'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->