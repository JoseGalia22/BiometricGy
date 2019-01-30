<?php
/* @var $this DclientesController */
/* @var $model Dclientes */

$this->breadcrumbs=array(
	'Dclientes'=>array('index'),
	$model->idcliente=>array('view','id'=>$model->idcliente),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de usuarios', 'url'=>array('index')),
	array('label'=>'Crear un nuevo usuario', 'url'=>array('create')),
	array('label'=>'Ver usuarios', 'url'=>array('view', 'id'=>$model->idcliente)),
	array('label'=>'Todos los usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar usuarios<?php echo $model->idcliente; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>