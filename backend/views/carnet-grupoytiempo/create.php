<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CarnetGrupoytiempo */

$this->title = 'Registrar Carnet de Grupo y tiempo';
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Grupos y tiempo', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-grupoytiempo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
