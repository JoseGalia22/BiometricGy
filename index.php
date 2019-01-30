<?php
/* @var $this DclientesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dclientes',
);

$this->menu=array(
	array('label'=>'Crear un nuevo usuario', 'url'=>array('create')),
	array('label'=>'Todos los usuarios', 'url'=>array('admin')),
);
?>

<h1>Dclientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
