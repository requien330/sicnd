<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetColores */

$this->title = $model->color;
$this->params['breadcrumbs'][] = ['label' => 'Carnet Colores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-colores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->color], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->color], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'color',
            'R_color',
            'G_color',
            'B_color',
        ],
    ]) ?>

</div>
