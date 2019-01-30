<?php

$this->breadcrumbs=array(
	'Dclientes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de usuarios', 'url'=>array('index')),
	array('label'=>'registrar nuevo usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dclientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Usuarios</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dclientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idcliente',
		'cedula',
                'nombre',
		'apellido',
		//'correo',
		//'fechanac',
		'mensuentrada',
		//'miembro',
		'mensuvencimiento',
		//'direccion',
		
		
		array(
			'class'=>'CButtonColumn',
                       'template' => '{view} {update} {delete} ',

                'buttons'=>array(

                            'update'=>array(
                                    'visible'=>'true',
                                    'label'=>'Actualizar',
                            ),
                         
                            'view'=>array(
                                    'visible'=>'true',
                                    'label'=>'ver',
                            ),
                         
                            'delete'=>array(
                                    'visible'=>'true',
                                    'label'=>'Borrar',
                          
                            ),
                     //   'pdf' => array(

                       //         'label'=>'Generar PDF', 

                         //       'url'=>"CHtml::normalizeUrl(array('pdf', 'idcliente'=>\$data->idcliente))",

                           //     'imageUrl'=>Yii::app()->request->baseUrl.'/images/pdf.png', 

                             //   'options' => array('class'=>'pdf'),

                       // ),
                     //'pagar' => array(

                       //         'label'=>'pago', 

                         //       'url'=>"CHtml::normalizeUrl(array('pago', 'idcliente'=>\$data->idcliente))",

                           //     'imageUrl'=>Yii::app()->request->baseUrl.'/images/visa.png', 

                             //   'options' => array('class'=>'pago'),

                       // ),

                ),

		),
	),
)); ?>
