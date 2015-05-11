<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlHorarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctrl-horario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idctrl_horario') ?>

    <?= $form->field($model, 'ced_empleado') ?>

    <?= $form->field($model, 'fentrada') ?>

    <?= $form->field($model, 'fsalida') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
