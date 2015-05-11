<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CtrlHorarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ctrl Horarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctrl-horario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ctrl Horario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idctrl_horario',
            'ced_empleado',
            'fentrada',
            'fsalida',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
