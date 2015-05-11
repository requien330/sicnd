<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetGrupoytiempo */

$this->title = 'Modificar Carnet para Grupo y tiempo: ' . ' ' . $model->idcarnet_grupoytiempo;
$this->params['breadcrumbs'][] = ['label' => 'Carnet Grupoytiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_grupoytiempo, 'url' => ['view', 'id' => $model->idcarnet_grupoytiempo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-grupoytiempo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
