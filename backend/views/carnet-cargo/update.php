<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetCargo */

$this->title = 'Modificar Carnet de Cargo: ' . ' ' . $model->idcarnet_cargo;
$this->params['breadcrumbs'][] = ['label' => 'Carnet de Cargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_cargo, 'url' => ['view', 'id' => $model->idcarnet_cargo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-cargo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
