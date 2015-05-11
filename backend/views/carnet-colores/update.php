<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetColores */

$this->title = 'Update Carnet Colores: ' . ' ' . $model->color;
$this->params['breadcrumbs'][] = ['label' => 'Carnet Colores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->color, 'url' => ['view', 'id' => $model->color]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-colores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
