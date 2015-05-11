<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetPlantillaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-plantilla-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcarnet_plantilla') ?>

    <?= $form->field($model, 'carnet_plantilla') ?>

    <?= $form->field($model, 'orientacion') ?>

    <?= $form->field($model, 'archivo_plantilla') ?>

    <?= $form->field($model, 'nombreapellido_color') ?>

    <?php // echo $form->field($model, 'nombreapellido_fuenteletra') ?>

    <?php // echo $form->field($model, 'cedula_color') ?>

    <?php // echo $form->field($model, 'cedula_fuenteletra') ?>

    <?php // echo $form->field($model, 'fecha_color') ?>

    <?php // echo $form->field($model, 'fecha_fuentetamano') ?>

    <?php // echo $form->field($model, 'fecha_fuenteletra') ?>

    <?php // echo $form->field($model, 'visitante_color') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Restaurar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
