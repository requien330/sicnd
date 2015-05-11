<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MEmpleados */

$this->title = 'Modificar Empleados: ' . ' ' . $model->ced_empleado;
$this->params['breadcrumbs'][] = ['label' => 'Mempleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ced_empleado, 'url' => ['view', 'id' => $model->ced_empleado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mempleados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
