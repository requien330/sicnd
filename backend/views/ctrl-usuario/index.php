<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CtrlUsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Control de Usuarios';
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = ['label' => 'Empleados', 'url' => ['/mempleados/index']];
?>
<div class="ctrl-usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Registrar Control Usuario', ['value'=>Url::to(['/ctrl-usuario/create']),'class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

<?php
Modal::begin([
            'header'=>'<h4>Registrar Control Usuario</h4>',
            'id'=>'modal', 
            'size'=>'modal-lg',
            ]);

echo "<div id='modalContent'></div>";


Modal::end();
?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ced_empleado',
            'idusuario',
            'idgrupoytiempo',
            'idcarnet_departamento',
            'numero',
            'codigo_pin',
            // 'codigo_id',
            // 'codigo_sitio',
            // 'codigo_tarjeta',
            // 'tarjetayopin',
            // 'codigo_bio',
            // 'tienefechalimite',
            // 'fechahasta',
            // 'rondasguardias',
            // 'skipfpcheck',
            // 'modificable',
            // 'nivel',
            // 'antipassback',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
