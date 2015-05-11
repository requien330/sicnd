<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetEmpleadoImp */

$this->title = 'Update Carnet Empleado Imp: ' . ' ' . $model->idcarnet_empleado_imp;
$this->params['breadcrumbs'][] = ['label' => 'Carnet Empleado Imps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_empleado_imp, 'url' => ['view', 'id' => $model->idcarnet_empleado_imp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-empleado-imp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
