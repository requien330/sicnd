<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetCargoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-cargo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcarnet_cargo') ?>

    <?= $form->field($model, 'idcarnet_plantilla') ?>

    <?= $form->field($model, 'cargo_nombre') ?>

    <?= $form->field($model, 'cargo_letracolor') ?>

    <?= $form->field($model, 'cargo_fuenteletra') ?>

    <?php // echo $form->field($model, 'cargo_color') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
