<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CarnetPlantilla */

$this->title = 'Registrar Plantilla de Carnet';
$this->params['breadcrumbs'][] = ['label' => 'Plantillas de Carnet', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-plantilla-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
