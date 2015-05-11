<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetCargo */

$this->title = $model->idcarnet_cargo;
$this->params['breadcrumbs'][] = ['label' => 'Carnet de Cargos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-cargo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->idcarnet_cargo], [
        'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',]
        ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idcarnet_cargo], [
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
            'idcarnet_cargo',
            'idcarnet_plantilla',
            'cargo_nombre',
            'cargo_letracolor',
            'cargo_fuenteletra',
            'cargo_color',
        ],
    ]) ?>

</div>
