<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CarnetPlantilla;
use backend\models\CarnetDepartamento;
use backend\models\CarnetCargo;
use backend\models\CarnetGrupoytiempo;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetEmpleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carnet-empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'idcarnet_plantilla')->dropDownList(
        ArrayHelper::map(carnetplantilla::find()->all(),'idcarnet_plantilla','carnet_plantilla'),
        ['prompt'=>'Selecciona la plantilla']
    ) ?>

    <?= $form->field($model, 'idcarnet_departamento')->dropDownList(
        ArrayHelper::map(carnetdepartamento::find()->all(),'idcarnet_departamento','departamento_nombre'),
        ['prompt'=>'Selecciona la plantilla']
    )?>

    <?= $form->field($model, 'idcarnet_cargo')->dropDownList(
        ArrayHelper::map(carnetcargo::find()->all(),'idcarnet_cargo','cargo_nombre'),
        ['prompt'=>'Selecciona la plantilla']
    )?>

    <?= $form->field($model, 'idcarnet_grupoytiempo')->dropDownList(
        ArrayHelper::map(carnetgrupoytiempo::find()->all(),'idcarnet_grupoytiempo','grupoytiempo_nombre'),
        ['prompt'=>'Selecciona la plantilla']
    )?>
    
    <?= $form->field($model, 'ced_empleado')->textInput() ?>

    <?= $form->field($model, 'fecha_vencimiento')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
