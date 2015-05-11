<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlZonaTiempo */

$this->title = 'Modificar Control de Zona de Tiempos: ' . ' ' . $model->indice;
$this->params['breadcrumbs'][] = ['label' => 'Control de Zona de Tiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->indice, 'url' => ['view', 'id' => $model->indice]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="ctrl-zona-tiempo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
