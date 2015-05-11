<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CtrlUsuario */
/* @var $form yii\widgets\ActiveForm */

/*

<?= $form->field($model, 'antipassback')->textInput() ?>
<?= $form->field($model, 'skipfpcheck')->textInput() ?>
*/
?>

<div class="ctrl-usuario-form">

    <?php $form = ActiveForm::begin(); ?>
    
  <table width="70%" border="0">
  <tr>
    <th colspan="3" scope="col"><?= $form->field($model, 'ced_empleado')->textInput() ?></th>
    <th width="4%" scope="col">&nbsp;</th>
    <th colspan="3" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td colspan="3"><?= $form->field($model, 'idgrupoytiempo')->textInput() ?></td>
    <td>&nbsp;</td>
    <td colspan="3"><?= $form->field($model, 'idcarnet_departamento')->textInput() ?></td>
  </tr>
  <tr>
    <td width="21%"><?= $form->field($model, 'numero')->textInput() ?></td>
    <td width="3%">&nbsp;</td>
    <td width="17%"><?= $form->field($model, 'codigo_pin')->textInput() ?></td>
    <td>&nbsp;</td>
    <td width="26%"><?= $form->field($model, 'codigo_id')->textInput(['maxlength' => 10]) ?></td>
    <td width="3%">&nbsp;</td>
    <td width="26%"><?= $form->field($model, 'codigo_sitio')->textInput(['maxlength' => 5]) ?></td>
  </tr>
  <tr>
    <td><?= $form->field($model, 'codigo_tarjeta')->textInput(['maxlength' => 5]) ?></td>
    <td>&nbsp;</td>
    <td><?= $form->field($model, 'tarjetayopin')->textInput() ?></td>
    <td>&nbsp;</td>
    <td><?= $form->field($model, 'codigo_bio')->textInput(['maxlength' => 255]) ?></td>
    <td>&nbsp;</td>
    <td><?= $form->field($model, 'tienefechalimite')->checkbox() ?></td>
  </tr>
  <tr>
    <td><?= $form->field($model, 'fechahasta')->textInput() ?></td>
    <td>&nbsp;</td>
    <td><?= $form->field($model, 'rondasguardias')->checkbox() ?></td>
    <td>&nbsp;</td>
    <td><?= $form->field($model, 'modificable')->checkbox() ?></td>
    <td>&nbsp;</td>
    <td><?= $form->field($model, 'nivel')->textInput() ?></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><span class="form-group">
      <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </span></td>
  </tr>
</table>
  <div class="form-group"></div>

    <?php ActiveForm::end(); ?>

</div>
