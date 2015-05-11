<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_departamento".
 *
 * @property integer $idcarnet_departamento
 * @property integer $idcarnet_plantilla
 * @property string $departamento_nombre
 * @property string $departamento_color
 * @property string $departamento_fuenteletra
 * @property string $departamento_letracolor
 *
 * @property CarnetPlantilla $idcarnetPlantilla
 * @property CarnetColores $departamentoColor
 * @property CarnetColores $departamentoLetracolor
 * @property CarnetEmpleado[] $carnetEmpleados
 * @property CtrlUsuario[] $ctrlUsuarios
 */
class CarnetDepartamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_plantilla'], 'integer'],
            [['departamento_nombre'], 'required'],
            [['departamento_nombre'], 'string', 'max' => 100],
            [['departamento_color', 'departamento_letracolor'], 'string', 'max' => 10],
            [['departamento_fuenteletra'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarnet_departamento' => 'Id carnet del Departamento',
            'idcarnet_plantilla' => 'Identificacion del carnet Plantilla',
            'departamento_nombre' => 'Nombre del Departamento',
            'departamento_color' => 'Color representativo del Departamento',
            'departamento_fuenteletra' => 'Fuente letra',
            'departamento_letracolor' => 'Letra color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcarnetPlantilla()
    {
        return $this->hasOne(CarnetPlantilla::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentoColor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'departamento_color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartamentoLetracolor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'departamento_letracolor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetEmpleados()
    {
        return $this->hasMany(CarnetEmpleado::className(), ['idcarnet_departamento' => 'idcarnet_departamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtrlUsuarios()
    {
        return $this->hasMany(CtrlUsuario::className(), ['idcarnet_departamento' => 'idcarnet_departamento']);
    }
}
