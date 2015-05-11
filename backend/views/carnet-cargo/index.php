<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetCargoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet para Cargos';
$this->params['breadcrumbs'][] = ['label' => 'Plantillas de Carnet', 'url' => ['/carnet-plantilla/index']];
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Departamentos', 'url' => ['/carnet-departamento/index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Grupos y tiempo', 'url' => ['/carnet-grupoytiempo/index']];
?>
<div class="carnet-cargo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar un Carnet de Cargo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcarnet_cargo',
            'idcarnet_plantilla',
            'cargo_nombre',
            'cargo_letracolor',
            'cargo_fuenteletra',
            'cargo_color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
