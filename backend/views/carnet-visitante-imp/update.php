<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetVisitanteImp */

$this->title = 'Update Carnet Visitante Imp: ' . ' ' . $model->idcarnet_visitante_imp;
$this->params['breadcrumbs'][] = ['label' => 'Carnet Visitante Imps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcarnet_visitante_imp, 'url' => ['view', 'id' => $model->idcarnet_visitante_imp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carnet-visitante-imp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
