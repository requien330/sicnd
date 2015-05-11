<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RegGrupoytiempo */

$this->title = 'Modificar Grupos y tiempos: ' . ' ' . $model->idgrupoytiempo;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos y tiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgrupoytiempo, 'url' => ['view', 'id' => $model->idgrupoytiempo]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="reg-grupoytiempo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
