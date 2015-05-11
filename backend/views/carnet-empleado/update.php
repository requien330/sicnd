<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetEmpleado */

$this->title = 'Modificar Carnet para Empleados: ' . ' ' . $model->idcarnet_empleado;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_empleado, 'url' => ['view', 'id' => $model->idcarnet_empleado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-empleado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
