<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CtrlZonaTiempo */

$this->title = 'Registrar Control de Zona de Tiempo';
$this->params['breadcrumbs'][] = ['label' => 'Control de Zona de Tiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctrl-zona-tiempo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
