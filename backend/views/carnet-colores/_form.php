<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetColores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-colores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'color')->textInput() ?>

    <?= $form->field($model, 'R_color')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'G_color')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'B_color')->textInput(['maxlength' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
