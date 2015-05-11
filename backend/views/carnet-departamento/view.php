<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetDepartamento */

$this->title = $model->idcarnet_departamento;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-departamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->idcarnet_departamento], [
            'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
            ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idcarnet_departamento], [
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
            'idcarnet_departamento',
            'idcarnet_plantilla',
            'departamento_nombre',
            'departamento_color',
            'departamento_fuenteletra',
            'departamento_letracolor',
        ],
    ]) ?>

</div>
