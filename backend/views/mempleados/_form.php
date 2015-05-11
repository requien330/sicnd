<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MEmpleados */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mempleados-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'ced_empleado')->textInput() ?>

    <?= $form->field($model, 'ape_empleado')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'nom_empleado')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'dir_empleado')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'es_venezolano')->checkbox() ?>

    <?= $form->field($model, 'es_masculino')->checkbox() ?>

    <?= $form->field($model, 'fec_empleado')->textInput() ?>

    <?= $form->field($model, 'edo_empleado')->textInput() ?>

    <?= $form->field($model, 'log_empleado')->textInput(['maxlength' => 32]) ?>

    <?= $form->field($model, 'pass_empleado')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'cod_nivel')->textInput() ?>

    <?= $form->field($model, 'file')->fileInput(['class' => 'btn btn-primary']); ?>    

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