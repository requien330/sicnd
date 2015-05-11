<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlVisitantes */

$this->title = 'Modificar el Control de Visitantes: ' . ' ' . $model->idvisitante;
$this->params['breadcrumbs'][] = ['label' => 'Control de Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idvisitante, 'url' => ['view', 'id' => $model->idvisitante]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="ctrl-visitantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
