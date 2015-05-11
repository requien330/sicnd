<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_cargo".
 *
 * @property integer $idcarnet_cargo
 * @property integer $idcarnet_plantilla
 * @property string $cargo_nombre
 * @property string $cargo_letracolor
 * @property string $cargo_fuenteletra
 * @property string $cargo_color
 *
 * @property CarnetColores $cargoColor
 * @property CarnetPlantilla $idcarnetPlantilla
 * @property CarnetColores $cargoLetracolor
 * @property CarnetEmpleado[] $carnetEmpleados
 */
class CarnetCargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_cargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_plantilla'], 'integer'],
            [['cargo_nombre'], 'required'],
            [['cargo_nombre'], 'string', 'max' => 100],
            [['cargo_letracolor', 'cargo_color'], 'string', 'max' => 10],
            [['cargo_fuenteletra'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarnet_cargo' => 'Id carnet del Cargo',
            'idcarnet_plantilla' => 'Identificacion del carnet de Plantilla',
            'cargo_nombre' => 'Nombre del Cargo',
            'cargo_letracolor' => 'Color de la letra del Cargo',
            'cargo_fuenteletra' => 'Fuente de la letra',
            'cargo_color' => 'Color del Cargo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargoColor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'cargo_color']);
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
    public function getCargoLetracolor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'cargo_letracolor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetEmpleados()
    {
        return $this->hasMany(CarnetEmpleado::className(), ['idcarnet_cargo' => 'idcarnet_cargo']);
    }
}
