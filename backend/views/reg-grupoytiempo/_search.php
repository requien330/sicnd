<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegGrupoytiempoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-grupoytiempo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idgrupoytiempo') ?>

    <?= $form->field($model, 'idgrupo') ?>

    <?= $form->field($model, 'idzonadetiempo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
