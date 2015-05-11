<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CarnetVisitanteImp */

$this->title = 'Create Carnet Visitante Imp';
$this->params['breadcrumbs'][] = ['label' => 'Carnet Visitante Imps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carnet-visitante-imp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
