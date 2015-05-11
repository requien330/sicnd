<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RegVisitantes */

$this->title = 'Registrar Visitantes';
$this->params['breadcrumbs'][] = ['label' => 'Registro de Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-visitantes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
