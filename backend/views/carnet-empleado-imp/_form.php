<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetEmpleadoImp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-empleado-imp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcarnet_empleado')->textInput() ?>

    <?= $form->field($model, 'idusuario')->textInput() ?>

    <?= $form->field($model, 'modo')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
