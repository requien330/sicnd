<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MEmpleados */

$this->title = 'Registrar Empleados';
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mempleados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
