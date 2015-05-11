<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegGrupoytiempo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-grupoytiempo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idgrupo')->textInput() ?>

    <?= $form->field($model, 'idzonadetiempo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
