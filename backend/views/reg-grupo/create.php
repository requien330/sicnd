<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RegGrupo */

$this->title = 'Registrar Grupo';
$this->params['breadcrumbs'][] = ['label' => 'Registro de Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reg-grupo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
