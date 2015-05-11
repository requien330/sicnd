<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Imagen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imagen-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'color_dpt')->textInput() ?>

    <?= $form->field($model, 'color_crg')->textInput() ?>

    <?= $form->field($model, 'color_gyt')->textInput() ?>

    <?= $form->field($model, 'archivo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<html>
    <head>
        <script type="text/javascript"></script>
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
        <script type="text/javascript">        
        </script>
    </body>
</html>
