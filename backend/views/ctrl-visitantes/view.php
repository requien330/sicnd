<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlVisitantes */

$this->title = $model->idvisitante;
$this->params['breadcrumbs'][] = ['label' => 'Control de Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctrl-visitantes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->idvisitante], [
        'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idvisitante], [
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
            'idvisitante',
            'ced_visitante',
            'cedcontacto',
            'idmotivos',
            'codigo_pin',
            'fentrada',
            'fsalida',
        ],
    ]) ?>

</div>
