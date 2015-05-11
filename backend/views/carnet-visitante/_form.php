<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CarnetPlantilla;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetVisitante */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-visitante-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idcarnet_plantilla')->dropDownList(
        ArrayHelper::map(carnetplantilla::find()->all(),'idcarnet_plantilla','carnet_plantilla'),
        ['prompt'=>'Selecciona la plantilla']
    ) ?>

    <?= $form->field($model, 'ced_visitante')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
