<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RegGrupoytiempo */

$this->title = $model->idgrupoytiempo;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos y tiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-grupoytiempo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idgrupoytiempo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idgrupoytiempo], [
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
            'idgrupoytiempo',
            'idgrupo',
            'idzonadetiempo',
        ],
    ]) ?>

</div>
