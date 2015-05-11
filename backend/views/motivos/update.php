<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Motivos */

$this->title = 'Registrar Motivos de Visitas: ' . ' ' . $model->idmotivos;
$this->params['breadcrumbs'][] = ['label' => 'Motivos de Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmotivos, 'url' => ['view', 'id' => $model->idmotivos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="motivos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
