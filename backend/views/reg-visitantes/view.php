<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RegVisitantes */

$this->title = $model->ced_visitante;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-visitantes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->ced_visitante], [
         'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->ced_visitante], [
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
            'ced_visitante',
            'nombre_visitante',
            'apellido_visitante',
            'sexo_visitante',
            'telefono_visitante',
            'telefono_celular_visitante',
            'direccion_visitante',
            'nacionalidad_visitante',
            'fecha_creacion_visitante',
            'lista_negra:boolean',
            'email_visitante:email',
            'url_foto:url',
        ],
    ]) ?>

</div>
