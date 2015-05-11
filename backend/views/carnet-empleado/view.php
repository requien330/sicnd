<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarnetEmpleado */

$this->title = $model->idcarnet_empleado;
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-empleado-view">
<?php $idc=($model->idcarnet_empleado);?>

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->idcarnet_empleado], [
        'class' => 'btn btn-primary',
            'data' => [
            'confirm' => '¿Esta seguro que desea Modificar este registro?',
            'method' => 'post',],
        ]) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idcarnet_empleado], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Esta seguro que desea borrar este registro?',
                'method' => 'post',
            ],
        ]) ?>
     <a class='btn btn-success' href="plantilla_carnet/carnet_empleado.php?idc=<?php echo $idc ?>">Crear Carnet</a>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcarnet_empleado',
            'idcarnet_plantilla',
            'idcarnet_departamento',
            'idcarnet_cargo',
            'ced_empleado',
            'fecha_vencimiento',
            'idcarnet_grupoytiempo',
        ],
    ]) ?>

</div>
