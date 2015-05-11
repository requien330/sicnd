<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CarnetEmpleadoImp */

$this->title = 'Create Carnet Empleado Imp';
$this->params['breadcrumbs'][] = ['label' => 'Carnet Empleado Imps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-empleado-imp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
