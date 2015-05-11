<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Crear Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'ced_empleado') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rol_id')->dropDownList([ '1' => 'SuperUsuario', '2' => 'Administrador de Sistema', '3' => 'Jefe de Departamento', '4' => 'Supervisor', '5' => 'Empleado', '6' => 'Vigilante',], ['prompt' => 'Nivel de Seguridad']) ?>
                <?= $form->field($model, 'estado')->dropDownList([ 'activo' => 'ACTIVO', 'inactivo' => 'INACTIVO', ], ['prompt' => 'Estado en el Trabajo']) ?>
                <div class="form-group">
                    <?= Html::submitButton('Crear Usuario', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
