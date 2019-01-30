<?php
/* @var $this DclientesController */
/* @var $model Dclientes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dclientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos<span class="required">*</span> requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'Cedula'); ?>
		<?php echo $form->textField($model,'cedula'); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha de nacimiento'); ?>
		<?php echo $form->dateField($model,'fechanac'); ?>
		<?php echo $form->error($model,'fechanac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mes Pago'); ?>
		<?php echo $form->dateField($model,'mensuentrada'); ?>
		<?php echo $form->error($model,'mensuentrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Activo Hasta'); ?>
		<?php echo $form->dateField($model,'mensuvencimiento'); ?>
		<?php echo $form->error($model,'mensuvencimiento'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'Miembro desde'); ?>
		<?php echo $form->dateField($model,'miembro'); ?>
		<?php echo $form->error($model,'miembro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

           <video id="video"></video>
<button id="startbutton">Take photo</button>
<canvas id="canvas"></canvas>
<img src="http://placekitten.com/g/320/261" id="photo" alt="photo">
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->