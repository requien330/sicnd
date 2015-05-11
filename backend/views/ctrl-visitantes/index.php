<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CtrlVisitantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Control de Visitas';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Visitantes', 'url' => ['/reg-visitantes/index']];
$this->params['breadcrumbs'][] = ['label' => 'Motivos de Visitas', 'url' => ['/motivos/index']];
?>
<div class="ctrl-visitantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Visita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idvisitante',
            'ced_visitante',
            'cedcontacto',
            'idmotivos',
            'codigo_pin',
            // 'fentrada',
            // 'fsalida',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
