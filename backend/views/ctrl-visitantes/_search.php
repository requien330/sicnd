<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlVisitantesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctrl-visitantes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idvisitante') ?>

    <?= $form->field($model, 'ced_visitante') ?>

    <?= $form->field($model, 'cedcontacto') ?>

    <?= $form->field($model, 'idmotivos') ?>

    <?= $form->field($model, 'codigo_pin') ?>

    <?php // echo $form->field($model, 'fentrada') ?>

    <?php // echo $form->field($model, 'fsalida') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Restaurar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
