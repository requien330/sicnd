<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetPlantillaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plantillas de Carnet';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Departamentos', 'url' => ['/carnet-departamento/index']];
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Cargos', 'url' => ['/carnet-cargo/index']];
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Grupos y tiempo', 'url' => ['/carnet-grupoytiempo/index']];
?>
<div class="carnet-plantilla-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Plantilla de Carnet', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcarnet_plantilla',
            'carnet_plantilla',
            'orientacion',
            'archivo_plantilla',
            'nombreapellido_color',
            // 'nombreapellido_fuenteletra',
            // 'cedula_color',
            // 'cedula_fuenteletra',
            // 'fecha_color',
            // 'fecha_fuentetamano',
            // 'fecha_fuenteletra',
            // 'visitante_color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
