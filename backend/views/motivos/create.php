<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Motivos */

$this->title = 'Registrar Motivos de Visitas';
$this->params['breadcrumbs'][] = ['label' => 'Motivos de Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motivos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
