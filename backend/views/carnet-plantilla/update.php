<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetPlantilla */

$this->title = 'Modificar Plantilla de Carnet: ' . ' ' . $model->idcarnet_plantilla;
$this->params['breadcrumbs'][] = ['label' => 'Plantillas de Carnet', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_plantilla, 'url' => ['view', 'id' => $model->idcarnet_plantilla]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-plantilla-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
