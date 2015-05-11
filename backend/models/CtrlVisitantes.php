<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.ctrl_visitantes".
 *
 * @property integer $idvisitante
 * @property integer $ced_visitante
 * @property integer $cedcontacto
 * @property integer $idmotivos
 * @property integer $codigo_pin
 * @property string $fentrada
 * @property string $fsalida
 *
 * @property RegVisitantes $cedVisitante
 * @property MEmpleados $cedcontacto0
 * @property Motivos $idmotivos0
 */
class CtrlVisitantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.ctrl_visitantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ced_visitante', 'cedcontacto', 'idmotivos', 'codigo_pin'], 'required'],
            [['ced_visitante', 'cedcontacto', 'idmotivos', 'codigo_pin'], 'integer'],
            [['fentrada', 'fsalida'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idvisitante' => 'Idvisitante',
            'ced_visitante' => 'Ced Visitante',
            'cedcontacto' => 'Cedcontacto',
            'idmotivos' => 'Idmotivos',
            'codigo_pin' => 'Codigo Pin',
            'fentrada' => 'Fentrada',
            'fsalida' => 'Fsalida',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedVisitante()
    {
        return $this->hasOne(RegVisitantes::className(), ['ced_visitante' => 'ced_visitante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedcontacto0()
    {
        return $this->hasOne(MEmpleados::className(), ['ced_empleado' => 'cedcontacto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdmotivos0()
    {
        return $this->hasOne(Motivos::className(), ['idmotivos' => 'idmotivos']);
    }
}
