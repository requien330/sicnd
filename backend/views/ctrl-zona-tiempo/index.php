<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CtrlZonaTiempoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Control de Zona de Tiempos';
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos y tiempos', 'url' => ['/reg-grupoytiempo/index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos', 'url' => ['/reg-grupo/index']];
?>
<div class="ctrl-zona-tiempo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Control de Zona de Tiempo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'indice',
            'descripcion',
            'disp_feriado:boolean',
            'nivel',
            'indicelink',
            // 'domingodesde',
            // 'domingohasta',
            // 'lunesdesde',
            // 'luneshasta',
            // 'martesdesde',
            // 'marteshasta',
            // 'miercolesdesde',
            // 'miercoleshasta',
            // 'juevesdesde',
            // 'jueveshasta',
            // 'viernesdesde',
            // 'vierneshasta',
            // 'sabadodesde',
            // 'sabadohasta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
