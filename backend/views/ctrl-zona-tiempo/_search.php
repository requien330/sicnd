<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlZonaTiempoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctrl-zona-tiempo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'indice') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'disp_feriado')->checkbox() ?>

    <?= $form->field($model, 'nivel') ?>

    <?= $form->field($model, 'indicelink') ?>

    <?php // echo $form->field($model, 'domingodesde') ?>

    <?php // echo $form->field($model, 'domingohasta') ?>

    <?php // echo $form->field($model, 'lunesdesde') ?>

    <?php // echo $form->field($model, 'luneshasta') ?>

    <?php // echo $form->field($model, 'martesdesde') ?>

    <?php // echo $form->field($model, 'marteshasta') ?>

    <?php // echo $form->field($model, 'miercolesdesde') ?>

    <?php // echo $form->field($model, 'miercoleshasta') ?>

    <?php // echo $form->field($model, 'juevesdesde') ?>

    <?php // echo $form->field($model, 'jueveshasta') ?>

    <?php // echo $form->field($model, 'viernesdesde') ?>

    <?php // echo $form->field($model, 'vierneshasta') ?>

    <?php // echo $form->field($model, 'sabadodesde') ?>

    <?php // echo $form->field($model, 'sabadohasta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
