<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CarnetPlantilla;
use backend\models\CarnetColores;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetCargo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-cargo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcarnet_plantilla')->dropDownList(
        ArrayHelper::map(carnetplantilla::find()->all(),'idcarnet_plantilla','carnet_plantilla'),
        ['prompt'=>'Selecciona la plantilla']
    ) ?>

    <?= $form->field($model, 'cargo_nombre')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cargo_letracolor')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>

    <?= $form->field($model, 'cargo_fuenteletra')->dropDownList([ 'Courier' => 'COURIER', 'Arial' => 'ARIAL', 'Times' => 'TIMES' ], ['prompt' => 'Tipo de Letra']) ?>

    <?= $form->field($model, 'cargo_color')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

