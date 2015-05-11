<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlUsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctrl-usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idusuario') ?>

    <?= $form->field($model, 'idgrupoytiempo') ?>

    <?= $form->field($model, 'idcarnet_departamento') ?>

    <?= $form->field($model, 'numero') ?>

    <?= $form->field($model, 'codigo_pin') ?>

    <?php // echo $form->field($model, 'codigo_id') ?>

    <?php // echo $form->field($model, 'codigo_sitio') ?>

    <?php // echo $form->field($model, 'codigo_tarjeta') ?>

    <?php // echo $form->field($model, 'tarjetayopin') ?>

    <?php // echo $form->field($model, 'codigo_bio') ?>

    <?php // echo $form->field($model, 'tienefechalimite') ?>

    <?php // echo $form->field($model, 'fechahasta') ?>

    <?php // echo $form->field($model, 'rondasguardias') ?>

    <?php // echo $form->field($model, 'skipfpcheck') ?>

    <?php // echo $form->field($model, 'modificable') ?>

    <?php // echo $form->field($model, 'nivel') ?>

    <?php // echo $form->field($model, 'antipassback') ?>

    <?php // echo $form->field($model, 'ced_empleado') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Restaurar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
