<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetGrupoytiempoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet para Grupos y tiempo';
$this->params['breadcrumbs'][] = ['label' => 'Plantillas de Carnet', 'url' => ['/carnet-plantilla/index']];
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Departamentos', 'url' => ['/carnet-departamento/index']];
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Cargos', 'url' => ['/carnet-cargo/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-grupoytiempo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Carnet de Grupo y tiempo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcarnet_grupoytiempo',
            'grupoytiempo_nombre',
            'grupoytiempo_color',
            'idcarnet_plantilla',
            'grupoytiempo_letracolor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
