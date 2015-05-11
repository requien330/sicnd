<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetEmpleadoImpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet Empleado Imps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-empleado-imp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carnet Empleado Imp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcarnet_empleado_imp',
            'idcarnet_empleado',
            'idusuario',
            'modo',
            'fecha',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
