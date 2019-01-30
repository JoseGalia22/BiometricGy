<?php
//Validacion solo nÃºmeros y no permitir el copiado de palabras
//$baseUrl = Yii::app()->theme->baseUrl;
//$numeros = Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/jquery.numeric.js');
//print_r($model->attributes);exit;
?>
<section id="page-header" class="section background customheader">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3>Datos de Pago</h3>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<?php
/* @var $model Banesco */
// PANTALLA INICIAL DEL FORMULARIO DE PAGO
?>
<section class="customblogsection section section-grey makenopaddingtop">
    <div class="container">
        <div id="post-wrapper" class="row">
            <div id="content" class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <div id="grid" class="row">
                    <div class="box col-md-12 col-sm-12 clearfix">
                        <div class="box-desc">
                            <div class="blog-meta center-block">
                                <div style="text-align: center;margin-bottom: 2px;margin-top:5px;">
                                    <?php
//                                    $this->widget(
//                                            'bootstrap.widgets.TbLabel', array(
//                                        'type' => 'warning',
//                                        'htmlOptions' => array('style' => 'padding:3px;text-aling:center; font-size:16px; span{color:red;}'),
//                                        // 'success', 'warning', 'important', 'info' or 'inverse'
//                                        'label' => 'Los campos marcados con asterÃ­sco * son obligatorios',
//                                            )
//                                    );
                                    ?>
                                </div>    

                                <div id="cond-terms" style="display:block;text-align: justify;">

                                    <div class="row-fluid">

                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'banesco-form',
                                            'enableAjaxValidation' => false,
                                            'htmlOptions' => array(
                                            )
                                        ));
                                        ?>
<hr>
<div class="contenido container-fluid">
<div style="padding-left: 10%; padding-right: 10%;">
    <div class="form-group">

 <?php
          $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
        )); 
        ?>
        <?php //  echo $form->errorSummary($model); ?>
        <div class="form-group col-lg-12 text-center">
            <?php echo $form->labelEx($model,'monto'); ?>
            <?php echo $form->textField($model,'monto', array("value"=>$amount, "autocomplete" => "off", "class" => "form-control", "placeholder" => "Usuario",'maxlength' => 50,)); ?>
            <?php  echo $form->error($model,'monto'); ?>
            <?php // echo $form->textField($model, 'username', array("autocomplete" => "off", "class" => "form-control", "placeholder" => "DirecciÃ³n de Correo",'maxlength' => 50,)); ?>
        </div>
        
        <div class="form-group col-lg-12 text-center">
            <?php echo $form->labelEx($model,'cardHolderId'); ?>
            <?php echo $form->textField($model,'cardHolderId', array("class" => "form-control", "placeholder" => "Cédula de la Tarjeta",'maxlength' => 8,)); ?>
            <?php  echo $form->error($model,'cardHolderId'); ?>
            <?php // echo $form->passwordField($model, 'password', array("class" => "form-control", "placeholder" => "Clave o ContraseÃ±a",'maxlength' => 20,)); ?>
        </div>
        
        <div class="form-group col-lg-12 span5 text-center">
             <?php echo $form->labelEx($model, "tipoTarjeta"); ?>
        <?php
        echo $form->dropDownList(
                $model, "tipoTarjeta", array("1" => "Visa", "2" => "MasterCard"),array('class' => 'span10')
        )
        ?>
        </div>
        
        <div class="form-group col-lg-12 text-center">
            <?php echo $form->labelEx($model,'cardHolder'); ?>
            <?php echo $form->textField($model,'cardHolder', array("class" => "form-control", "placeholder" => "Nombre de la Tarjeta",'maxlength' => 40,)); ?>
            <?php  echo $form->error($model,'cardHolder'); ?>
            <?php // echo $form->passwordField($model, 'password', array("class" => "form-control", "placeholder" => "Clave o ContraseÃ±a",'maxlength' => 20,)); ?>
        </div>
        
        <div class="form-group col-lg-12 text-center">
            <?php echo $form->labelEx($model,'cardNumber'); ?>
            <?php echo $form->textField($model,'cardNumber', array("class" => "form-control", "placeholder" => "Número de la Tarjeta",'maxlength' => 20,)); ?>
            <?php  echo $form->error($model,'cardNumber'); ?>
            <?php // echo $form->passwordField($model, 'password', array("class" => "form-control", "placeholder" => "Clave o ContraseÃ±a",'maxlength' => 20,)); ?>
        </div>
        
        <div class="form-group col-lg-12 text-center">
            <?php echo $form->labelEx($model,'cvc'); ?>
            <?php echo $form->passwordField($model,'cvc', array("class" => "form-control", "placeholder" => "Código de Seguridad",'maxlength' => 3,)); ?>
            <?php  echo $form->error($model,'cvc'); ?>
            <?php echo $form->hiddenfield($model, 'idusuario', array("value"=>$_GET['id'])); ?>
        </div>
       
       
        <div class="form-group col-lg-12 text-center">
            <?php echo CHtml::submitButton('Pagar', array("class" => "btn btn-primary btn-block btn-lg")); ?>
        </div>
        <br><br>

        <?php $this->endWidget(); ?>
   </div>
</div>
</div>
  


                                        

                                        <div class="row" id="" style="text-align: center">

                                            <?php
//                                            $this->widget('bootstrap.widgets.TbButton', array(
//                                                'buttonType' => 'submit',
//                                                'type' => 'primary',
//                                                'label' => 'Pagar',
//                                                'size' => 'medium',
//                                                'icon' => 'icon-ok-sign icon-white',
//                                                'id' => 'paymentButton',
//                                                'htmlOptions' => array(
//                                                    'style' => 'margin-right:5px;',
//                                                ),
//                                            ));
                                            ?>    
 
                                            <?php // echo CHtml::submitButton('Pagar', array("id" => "paymentButton")); ?>
                                        </div><br><br>
<!--                                        <div style="text-align:center;font-size:14px;;color:#004E9B;font-weight:bold;">
                                            <?php // echo messages::banescoMessageTransaction.':' ?>
                                            <br />
                                            <br />
                                            <?php // echo Chtml::image(Yii::app()->theme->baseUrl . "/imagenes/instapago_banesco.png"); ?>
                                            <br />
                                            <br />
                                        </div>-->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end content -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section><!-- end section -->

<?php $this->endWidget(); ?>
