<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetDepartamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-departamento-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'idcarnet_plantilla')->dropDownList([ '1' => 'Plantilla de Empleados'], ['prompt' => 'Escoja una Plantilla']) ?>

    <?= $form->field($model, 'departamento_nombre')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'departamento_color')->dropDownList([ 'Negro' => 'Negro', 'Azul' => 'Azul', 'Amarillo' => 'Amarillo', 'Verde' => 'Verde', 'Rojo' => 'Rojo', 'Anaranjado' => 'Anaranjado', 'Purpura' => 'Purpura', 'Marron' => 'Marron', 'Gris' => 'Gris', 'Verde Oliva' => 'Verde Oliva', 'Cyan' => 'Cyan', 'Magenta' => 'Magenta', 'Blanco' => 'Blanco'], ['prompt' => 'Elija un Color']) ?>

    <?= $form->field($model, 'departamento_fuenteletra')->dropDownList([ 'Courier' => 'COURIER', 'Arial' => 'ARIAL', 'Times' => 'TIMES' ], ['prompt' => 'Tipo de Letra']) ?>

    <?= $form->field($model, 'departamento_letracolor')->dropDownList([ 'Negro' => 'Negro', 'Azul' => 'Azul', 'Amarillo' => 'Amarillo', 'Verde' => 'Verde', 'Rojo' => 'Rojo', 'Anaranjado' => 'Anaranjado', 'Purpura' => 'Purpura', 'Marron' => 'Marron', 'Gris' => 'Gris', 'Verde Oliva' => 'Verde Oliva', 'Cyan' => 'Cyan', 'Magenta' => 'Magenta', 'Blanco' => 'Blanco'], ['prompt' => 'Elija un Color']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
