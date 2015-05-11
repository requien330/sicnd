<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CtrlVisitantes */

$this->title = 'Registrar Visita';
$this->params['breadcrumbs'][] = ['label' => 'Control de Visitantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Registro de Visitantes', 'url' => ['/reg-visitantes/index']];
$this->params['breadcrumbs'][] = ['label' => 'Motivos de Visitas', 'url' => ['/motivos/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctrl-visitantes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
