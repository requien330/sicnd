<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CarnetDepartamento */

$this->title = 'Registrar Carnet para Departamentos';
$this->params['breadcrumbs'][] = ['label' => 'Carnet para Departamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-departamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
