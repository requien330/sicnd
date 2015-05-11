<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ImagenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Imagens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagen-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Imagen', ['create'], ['class' => 'btn btn-success']) ?>
        <a class='btn btn-success' href="http://localhost/sicnd/backend/views/imagen/carnet.php">crear archivo pdf</a>

    </p>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'url_foto:url',
            'color_dpt',
            'color_crg',
            'color_gyt',
            'archivo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
