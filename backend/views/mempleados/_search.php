<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MEmpleadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mempleados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ced_empleado') ?>

    <?= $form->field($model, 'ape_empleado') ?>

    <?= $form->field($model, 'nom_empleado') ?>

    <?= $form->field($model, 'dir_empleado') ?>

    <?= $form->field($model, 'es_venezolano')->checkbox() ?>

    <?php // echo $form->field($model, 'es_masculino')->checkbox() ?>

    <?php // echo $form->field($model, 'fec_empleado') ?>

    <?php // echo $form->field($model, 'edo_empleado') ?>

    <?php // echo $form->field($model, 'log_empleado') ?>

    <?php // echo $form->field($model, 'pass_empleado') ?>

    <?php // echo $form->field($model, 'cod_nivel') ?>

    <?php // echo $form->field($model, 'url_foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
