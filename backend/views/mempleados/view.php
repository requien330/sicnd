<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\MEmpleados */

$this->title = $model->ced_empleado;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mempleados-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->ced_empleado], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => '¿Esta seguro que desea Modificar este registro?',
                'method' => 'post',],


        ]) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ced_empleado], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Esta seguro que desea borrar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ced_empleado',
            'ape_empleado',
            'nom_empleado',
            'dir_empleado',
            'es_venezolano:boolean',
            'es_masculino:boolean',
            'fec_empleado',
            'edo_empleado',
            'log_empleado',
            'pass_empleado',
            'cod_nivel',
            'url_foto:url',
        ],
    ]) ?>

</div>
