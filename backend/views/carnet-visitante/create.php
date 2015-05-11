<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CarnetVisitante */

$this->title = 'Registrar Carnet de Visitante';
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-visitante-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
