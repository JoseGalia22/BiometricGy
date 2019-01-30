<?php
/* @var $this DclientesController */
/* @var $model Dclientes */

$this->breadcrumbs=array(
	'Dclientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de usuario', 'url'=>array('index')),
	array('label'=>'Todos los usuarios', 'url'=>array('admin')),
);
?>

<h1>Crear un nuevo usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>