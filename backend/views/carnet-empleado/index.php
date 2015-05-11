<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetEmpleadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet para Empleados';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Visitantes', 'url' => ['/carnet-visitante/index']];
?>
<div class="carnet-empleado-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Carnet para Empleados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcarnet_empleado',
            'idcarnet_plantilla',
            'idcarnet_departamento',
            'idcarnet_cargo',
            'ced_empleado',
            // 'fecha_vencimiento',
            // 'idcarnet_grupoytiempo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
