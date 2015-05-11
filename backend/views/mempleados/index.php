<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MEmpleadosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Empleados';
$this->params['breadcrumbs'][] = ['label' => 'Control de Usuarios', 'url' => ['/ctrl-usuario/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mempleados-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Empleados', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ced_empleado',
            'ape_empleado',
            'nom_empleado',
            //'dir_empleado',
            //'es_venezolano:boolean',
            // 'es_masculino:boolean',
            // 'fec_empleado',
            // 'edo_empleado',
            // 'log_empleado',
            // 'pass_empleado',
             'cod_nivel',
             'url_foto:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
