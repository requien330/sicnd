<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetVisitanteImp */

$this->title = $model->idcarnet_visitante_imp;
$this->params['breadcrumbs'][] = ['label' => 'Carnet Visitante Imps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-visitante-imp-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idcarnet_visitante_imp], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idcarnet_visitante_imp], [
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
            'idcarnet_visitante_imp',
            'idcarnet_visitante',
            'idusuario',
            'modo',
            'fecha',
        ],
    ]) ?>

</div>
