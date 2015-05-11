<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlUsuario */

$this->title = 'Modificar Control Usuario: ' . ' ' . $model->idusuario;
$this->params['breadcrumbs'][] = ['label' => 'Control Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idusuario, 'url' => ['view', 'id' => $model->idusuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ctrl-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
