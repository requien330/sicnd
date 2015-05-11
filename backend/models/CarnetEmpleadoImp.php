<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_empleado_imp".
 *
 * @property integer $idcarnet_empleado_imp
 * @property integer $idcarnet_empleado
 * @property integer $idusuario
 * @property string $modo
 * @property string $fecha
 *
 * @property CarnetEmpleado $idcarnetEmpleado
 * @property MEmpleados $idusuario0
 */
class CarnetEmpleadoImp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_empleado_imp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_empleado', 'idusuario', 'modo'], 'required'],
            [['idcarnet_empleado', 'idusuario'], 'integer'],
            [['fecha'], 'safe'],
            [['modo'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarnet_empleado_imp' => 'Id carnet Empleado Imp',
            'idcarnet_empleado' => 'Id carnet Empleado',
            'idusuario' => 'Id usuario',
            'modo' => 'Modo',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcarnetEmpleado()
    {
        return $this->hasOne(CarnetEmpleado::className(), ['idcarnet_empleado' => 'idcarnet_empleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdusuario0()
    {
        return $this->hasOne(MEmpleados::className(), ['ced_empleado' => 'idusuario']);
    }
}
