<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_visitante_imp".
 *
 * @property integer $idcarnet_visitante_imp
 * @property integer $idcarnet_visitante
 * @property integer $idusuario
 * @property string $modo
 * @property string $fecha
 *
 * @property CarnetVisitante $idcarnetVisitante
 * @property MEmpleados $idusuario0
 */
class CarnetVisitanteImp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_visitante_imp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_visitante', 'idusuario', 'modo'], 'required'],
            [['idcarnet_visitante', 'idusuario'], 'integer'],
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
            'idcarnet_visitante_imp' => 'Id carnet Visitante Impresion',
            'idcarnet_visitante' => 'Id carnet Visitante',
            'idusuario' => 'Id usuario',
            'modo' => 'Modo',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcarnetVisitante()
    {
        return $this->hasOne(CarnetVisitante::className(), ['idcarnet_visitante' => 'idcarnet_visitante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdusuario0()
    {
        return $this->hasOne(MEmpleados::className(), ['ced_empleado' => 'idusuario']);
    }
}
