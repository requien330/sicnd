<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.ctrl_horario".
 *
 * @property integer $idctrl_horario
 * @property integer $ced_empleado
 * @property string $fentrada
 * @property string $fsalida
 *
 * @property MEmpleados $cedEmpleado
 */
class CtrlHorario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.ctrl_horario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idctrl_horario', 'ced_empleado'], 'required'],
            [['idctrl_horario', 'ced_empleado'], 'integer'],
            [['fentrada', 'fsalida'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idctrl_horario' => 'Idctrl Horario',
            'ced_empleado' => 'Ced Empleado',
            'fentrada' => 'Fentrada',
            'fsalida' => 'Fsalida',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedEmpleado()
    {
        return $this->hasOne(MEmpleados::className(), ['ced_empleado' => 'ced_empleado']);
    }
}
