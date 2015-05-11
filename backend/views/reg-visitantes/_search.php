<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegVisitantesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-visitantes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ced_visitante') ?>

    <?= $form->field($model, 'nombre_visitante') ?>

    <?= $form->field($model, 'apellido_visitante') ?>

    <?= $form->field($model, 'sexo_visitante') ?>

    <?= $form->field($model, 'telefono_visitante') ?>

    <?php // echo $form->field($model, 'telefono_celular_visitante') ?>

    <?php // echo $form->field($model, 'direccion_visitante') ?>

    <?php // echo $form->field($model, 'nacionalidad_visitante') ?>

    <?php // echo $form->field($model, 'fecha_creacion_visitante') ?>

    <?php // echo $form->field($model, 'lista_negra')->checkbox() ?>

    <?php // echo $form->field($model, 'email_visitante') ?>

    <?php // echo $form->field($model, 'url_foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Restaurar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
