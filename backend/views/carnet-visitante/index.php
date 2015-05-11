<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetVisitanteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet para Visitantes';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Empleados', 'url' => ['/carnet-empleado/index']];
?>
<div class="carnet-visitante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Carnet de Visitante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcarnet_visitante',
            'idcarnet_plantilla',
            'ced_visitante',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
