<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetPlantilla */

$this->title = $model->idcarnet_plantilla;
$this->params['breadcrumbs'][] = ['label' => 'Plantillas de Carnet', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-plantilla-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->idcarnet_plantilla], [
        'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idcarnet_plantilla], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Esta seguro que desea borrar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcarnet_plantilla',
            'carnet_plantilla',
            'orientacion',
            'archivo_plantilla',
            'nombreapellido_color',
            'nombreapellido_fuenteletra',
            'cedula_color',
            'cedula_fuenteletra',
            'fecha_color',
            'fecha_fuentetamano',
            'fecha_fuenteletra',
            'visitante_color',
        ],
    ]) ?>

</div>
