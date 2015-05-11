<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CarnetColores;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetPlantilla */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-plantilla-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orientacion')->dropDownList([ 'P' => 'Vertical', 'L' => 'Horizontal' ], ['prompt' => 'Orientacion']) ?>

    <?= $form->field($model, 'archivo_plantilla')->dropDownList([ 'plantilla_carnet/base_carnet.php' => 'Archivo de Plantilla'], ['prompt' => 'Base de Plantilla']) ?>

    <?= $form->field($model, 'nombreapellido_color')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>
   
    <?= $form->field($model, 'nombreapellido_fuenteletra')->dropDownList([ 'Courier' => 'COURIER', 'Arial' => 'ARIAL', 'Times' => 'TIMES' ], ['prompt' => 'Tipo de Letra']) ?>

    <?= $form->field($model, 'cedula_color')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>

    <?= $form->field($model, 'cedula_fuenteletra')->dropDownList([ '7' => 'Pequeña', '8' => 'Mediana'], ['prompt' => 'Fuente Letra']) ?>

    <?= $form->field($model, 'fecha_color')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>

    <?= $form->field($model, 'fecha_fuentetamano'))->dropDownList([ 'Courier' => 'COURIER', 'Arial' => 'ARIAL', 'Times' => 'TIMES' ], ['prompt' => 'Tipo de Letra']) ?>

    <?= $form->field($model, 'fecha_fuenteletra')->dropDownList([ 'Courier' => 'COURIER', 'Arial' => 'ARIAL', 'Times' => 'TIMES' ], ['prompt' => 'Tipo de Letra']) ?>
    <?= $form->field($model, 'visitante_color')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
