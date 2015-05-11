<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetVisitante */

$this->title = $model->idcarnet_visitante;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-visitante-view">
<?php $idc=($model->idcarnet_visitante);?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idcarnet_visitante], [
        'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idcarnet_visitante], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Esta seguro que desea borrar este registro?',
                'method' => 'post',
            ],
        ]) ?>
        <a class='btn btn-success' href="plantilla_carnet/carnet_visitante.php?idc=<?php echo $idc ?>">Crear Carnet</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcarnet_visitante',
            'idcarnet_plantilla',
            'ced_visitante',
        ],
    ]) ?>

</div>
