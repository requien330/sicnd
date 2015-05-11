<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlHorario */

$this->title = 'Update Ctrl Horario: ' . ' ' . $model->idctrl_horario;
$this->params['breadcrumbs'][] = ['label' => 'Ctrl Horarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idctrl_horario, 'url' => ['view', 'id' => $model->idctrl_horario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ctrl-horario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
