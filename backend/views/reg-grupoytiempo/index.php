<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegGrupoytiempoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de Grupos y tiempos';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Control de Zona de Tiempos', 'url' => ['/ctrl-zona-tiempo/index']];
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos', 'url' => ['/reg-grupo/index']];
?>
<div class="reg-grupoytiempo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Grupo y tiempo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idgrupoytiempo',
            'idgrupo',
            'idzonadetiempo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
