<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetDepartamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet para Departamentos';
$this->params['breadcrumbs'][] = ['label' => 'Plantillas de Carnet', 'url' => ['/carnet-plantilla/index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Cargos', 'url' => ['/carnet-cargo/index']];
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Grupos y tiempo', 'url' => ['/carnet-grupoytiempo/index']];
?>
<div class="carnet-departamento-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Carnet para Departamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcarnet_departamento',
            'idcarnet_plantilla',
            'departamento_nombre',
            'departamento_color',
            'departamento_fuenteletra',
            'departamento_letracolor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
