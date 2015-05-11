<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RegGrupo */

$this->title = 'Modifica Registro de Grupos: ' . ' ' . $model->idgrupo;
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgrupo, 'url' => ['view', 'id' => $model->idgrupo]];
$this->params['breadcrumbs'][] = 'Modificar';
?>
<div class="reg-grupo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
