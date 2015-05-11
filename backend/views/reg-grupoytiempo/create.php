<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RegGrupoytiempo */

$this->title = 'Registrar Grupo y tiempo';
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos y tiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-grupoytiempo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
