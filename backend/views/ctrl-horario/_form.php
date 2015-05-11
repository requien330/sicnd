<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlHorario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctrl-horario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idctrl_horario')->textInput() ?>

    <?= $form->field($model, 'ced_empleado')->textInput() ?>

    <?= $form->field($model, 'fentrada')->textInput() ?>

    <?= $form->field($model, 'fsalida')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
