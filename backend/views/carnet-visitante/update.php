<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetVisitante */

$this->title = 'Modificar Carnet de Visitante: ' . ' ' . $model->idcarnet_visitante;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_visitante, 'url' => ['view', 'id' => $model->idcarnet_visitante]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-visitante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
