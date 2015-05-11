<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlZonaTiempo */

$this->title = $model->indice;
$this->params['breadcrumbs'][] = ['label' => 'Control de Zona de Tiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctrl-zona-tiempo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->indice], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->indice], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'indice',
            'descripcion',
            'disp_feriado:boolean',
            'nivel',
            'indicelink',
            'domingodesde',
            'domingohasta',
            'lunesdesde',
            'luneshasta',
            'martesdesde',
            'marteshasta',
            'miercolesdesde',
            'miercoleshasta',
            'juevesdesde',
            'jueveshasta',
            'viernesdesde',
            'vierneshasta',
            'sabadodesde',
            'sabadohasta',
        ],
    ]) ?>

</div>
