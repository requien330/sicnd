<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Motivos */

$this->title = $model->idmotivos;
$this->params['breadcrumbs'][] = ['label' => 'Motivos de Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motivos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idmotivos], [
             'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idmotivos], [
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
            'idmotivos',
            'descripcion',
        ],
    ]) ?>

</div>
