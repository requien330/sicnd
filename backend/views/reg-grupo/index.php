<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegGrupoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de Grupos';
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos y tiempos', 'url' => ['/reg-grupoytiempo/index']];
$this->params['breadcrumbs'][] = ['label' => 'Control de Zona de Tiempos', 'url' => ['/ctrl-zona-tiempo/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-grupo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Grupo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idgrupo',
            'nombre',
            'descripcion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
