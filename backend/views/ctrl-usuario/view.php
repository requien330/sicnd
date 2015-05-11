<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlUsuario */

$this->title = $model->idusuario;
$this->params['breadcrumbs'][] = ['label' => 'Control de Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctrl-usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->idusuario], [
        'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idusuario], [
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
            'idusuario',
            'idgrupoytiempo',
            'idcarnet_departamento',
            'numero',
            'codigo_pin',
            'codigo_id',
            'codigo_sitio',
            'codigo_tarjeta',
            'tarjetayopin',
            'codigo_bio',
            'tienefechalimite',
            'fechahasta',
            'rondasguardias',
            'skipfpcheck',
            'modificable',
            'nivel',
            'antipassback',
            'ced_empleado',
        ],
    ]) ?>

</div>
