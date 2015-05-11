<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetGrupoytiempoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-grupoytiempo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcarnet_grupoytiempo') ?>

    <?= $form->field($model, 'grupoytiempo_nombre') ?>

    <?= $form->field($model, 'grupoytiempo_color') ?>

    <?= $form->field($model, 'idcarnet_plantilla') ?>

    <?= $form->field($model, 'grupoytiempo_letracolor') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Restaurar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
