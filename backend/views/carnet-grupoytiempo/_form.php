<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CarnetColores;
use backend\models\CarnetPlantilla;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetGrupoytiempo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-grupoytiempo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcarnet_plantilla')->dropDownList(
        ArrayHelper::map(carnetplantilla::find()->all(),'idcarnet_plantilla','carnet_plantilla'),
        ['prompt'=>'Selecciona la plantilla']
    ) ?>

    <?= $form->field($model, 'grupoytiempo_nombre')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'grupoytiempo_color')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>

     <?= $form->field($model, 'grupoytiempo_letracolor')->dropDownList(
        ArrayHelper::map(carnetcolores::find()->all(),'color','color'),
        ['prompt'=>'Selecciona un Color']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
