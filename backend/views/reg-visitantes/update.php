<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RegVisitantes */

$this->title = 'Modificar el Registro de Visitantes: ' . ' ' . $model->ced_visitante;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ced_visitante, 'url' => ['view', 'id' => $model->ced_visitante]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="reg-visitantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
