<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetGrupoytiempo */

$this->title = $model->idcarnet_grupoytiempo;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Grupos y tiempo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-grupoytiempo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->idcarnet_grupoytiempo], [
            'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idcarnet_grupoytiempo], [
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
            'idcarnet_grupoytiempo',
            'grupoytiempo_nombre',
            'grupoytiempo_color',
            'idcarnet_plantilla',
            'grupoytiempo_letracolor',
        ],
    ]) ?>

</div>
