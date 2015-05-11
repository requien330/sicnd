<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CtrlUsuario */

$this->title = 'Rgistrar Ctrl Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Control de Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctrl-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
