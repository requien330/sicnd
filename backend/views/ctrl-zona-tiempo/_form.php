<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlZonaTiempo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctrl-zona-tiempo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'indice')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'disp_feriado')->checkbox() ?>

    <?= $form->field($model, 'nivel')->textInput() ?>

    <?= $form->field($model, 'indicelink')->textInput() ?>

    <?= $form->field($model, 'domingodesde')->textInput() ?>

    <?= $form->field($model, 'domingohasta')->textInput() ?>

    <?= $form->field($model, 'lunesdesde')->textInput() ?>

    <?= $form->field($model, 'luneshasta')->textInput() ?>

    <?= $form->field($model, 'martesdesde')->textInput() ?>

    <?= $form->field($model, 'marteshasta')->textInput() ?>

    <?= $form->field($model, 'miercolesdesde')->textInput() ?>

    <?= $form->field($model, 'miercoleshasta')->textInput() ?>

    <?= $form->field($model, 'juevesdesde')->textInput() ?>

    <?= $form->field($model, 'jueveshasta')->textInput() ?>

    <?= $form->field($model, 'viernesdesde')->textInput() ?>

    <?= $form->field($model, 'vierneshasta')->textInput() ?>

    <?= $form->field($model, 'sabadodesde')->textInput() ?>

    <?= $form->field($model, 'sabadohasta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
