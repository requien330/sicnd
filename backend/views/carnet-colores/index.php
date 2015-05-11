<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarnetColoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carnet Colores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-colores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Carnet Colores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'color',
            'R_color',
            'G_color',
            'B_color',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
