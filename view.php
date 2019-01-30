<?php


$this->breadcrumbs=array(
	'Dclientes'=>array('index'),
	$model->idcliente,
);

$this->menu=array(
	array('label'=>'Lista de usuarios', 'url'=>array('index')),
	array('label'=>'Crear un nuevo usuario', 'url'=>array('create')),
	array('label'=>'Actualizar usuario', 'url'=>array('update', 'id'=>$model->idcliente)),
	array('label'=>'Eliminar usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcliente),'confirm'=>'Estas Seguro que desea eliminar este usuario?')),
	array('label'=>'Todos los usuarios', 'url'=>array('admin')),
        array('label'=>'Crear PDF', 'url'=>array('pdf','idcliente'=>$model->idcliente)),
    
    
    );
?>

<h1>Ver Usuario <?php ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcliente',
		'nombre',
		'apellido',
		'correo',
		'fechanac',
		'mensuentrada',
		'mensuvencimiento',
		'direccion',
		'cedula',
                'miembro',
	),
)); ?>
