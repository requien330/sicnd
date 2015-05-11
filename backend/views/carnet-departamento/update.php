<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetDepartamento */

$this->title = 'Modificar Carnet para Departamento: ' . ' ' . $model->idcarnet_departamento;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_departamento, 'url' => ['view', 'id' => $model->idcarnet_departamento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-departamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
