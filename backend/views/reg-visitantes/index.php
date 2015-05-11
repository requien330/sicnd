<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegVisitantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de Visitantes';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Visitas', 'url' => ['/ctrl-visitantes/index']];
$this->params['breadcrumbs'][] = ['label' => 'Motivos de Visitas', 'url' => ['/motivos/index']];
?>
<div class="reg-visitantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Registrar Visitantes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ced_visitante',
            'nombre_visitante',
            'apellido_visitante',
            'sexo_visitante',
            'telefono_visitante',
            // 'telefono_celular_visitante',
            // 'direccion_visitante',
            // 'nacionalidad_visitante',
            // 'fecha_creacion_visitante',
            // 'lista_negra:boolean',
            // 'email_visitante:email',
            // 'url_foto:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
