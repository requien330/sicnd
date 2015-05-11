<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetDepartamentoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-departamento-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcarnet_departamento') ?>

    <?= $form->field($model, 'idcarnet_plantilla') ?>

    <?= $form->field($model, 'departamento_nombre') ?>

    <?= $form->field($model, 'departamento_color') ?>

    <?= $form->field($model, 'departamento_fuenteletra') ?>

    <?php // echo $form->field($model, 'departamento_letracolor') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Restaurar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
