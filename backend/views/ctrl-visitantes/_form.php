<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Motivos;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlVisitantes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctrl-visitantes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ced_visitante')->textInput() ?>

    <?= $form->field($model, 'cedcontacto')->textInput() ?>

    <?= $form->field($model, 'idmotivos')->dropDownList(
        ArrayHelper::map(motivos::find()->all(),'idmotivos','descripcion'),
        ['prompt'=>'Seleccione el Motivo de Visita']
    ) ?>

    <?= $form->field($model, 'codigo_pin')->textInput() ?>

    <?= $form->field($model, 'fentrada')->textInput() ?>

    <?= $form->field($model, 'fsalida')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
