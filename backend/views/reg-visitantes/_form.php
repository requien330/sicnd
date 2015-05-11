<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegVisitantes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-visitantes-form">

   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
   
    <?= $form->field($model, 'ced_visitante')->textInput() ?>

    <?= $form->field($model, 'nombre_visitante')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'apellido_visitante')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'sexo_visitante')->dropDownList([ 'M' => 'Masculino', 'F' => 'Femenino', ], ['prompt' => 'Sexo'],['maxlength' => 10]) ?>

    <?= $form->field($model, 'telefono_visitante')->textInput() ?>

    <?= $form->field($model, 'telefono_celular_visitante')->textInput() ?>

    <?= $form->field($model, 'direccion_visitante')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'nacionalidad_visitante')->dropDownList([ 'V' => 'Venezolano', 'E' => 'Extranjero', ], ['prompt' => 'Nacionalidad']) ?>

    <?= $form->field($model, 'lista_negra')->checkbox() ?>

    <?= $form->field($model, 'email_visitante')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>
 
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<html>
    <head>
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
    </head>
    <body>
        <button id="foto">
            Tomar Foto!
        </button>
        <button id="enviar">
            Enviar Foto!
        </button>
        <canvas id="canvas" width="450" height="368">
        </canvas>
        <video id="video" width="450" height="368" autoplay="autoplay">
        </video>
        <script type="text/javascript" src="js/canvas.js">        
        </script>
    </body>
</html>
