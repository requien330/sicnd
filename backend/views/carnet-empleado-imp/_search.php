<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetEmpleadoImpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-empleado-imp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcarnet_empleado_imp') ?>

    <?= $form->field($model, 'idcarnet_empleado') ?>

    <?= $form->field($model, 'idusuario') ?>

    <?= $form->field($model, 'modo') ?>

    <?= $form->field($model, 'fecha') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
