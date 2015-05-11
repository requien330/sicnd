<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_colores".
 *
 * @property string $color
 * @property string $R_color
 * @property string $G_color
 * @property string $B_color
 *
 * @property CarnetCargo[] $carnetCargos
 * @property CarnetDepartamento[] $carnetDepartamentos
 * @property CarnetGrupoytiempo[] $carnetGrupoytiempos
 * @property CarnetPlantilla[] $carnetPlantillas
 */
class CarnetColores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_colores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['color'], 'required'],
            [['color'], 'string'],
            [['R_color', 'G_color', 'B_color'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'color' => 'Color',
            'R_color' => 'R Color',
            'G_color' => 'G Color',
            'B_color' => 'B Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetCargos()
    {
        return $this->hasMany(CarnetCargo::className(), ['cargo_letracolor' => 'color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetDepartamentos()
    {
        return $this->hasMany(CarnetDepartamento::className(), ['departamento_letracolor' => 'color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetGrupoytiempos()
    {
        return $this->hasMany(CarnetGrupoytiempo::className(), ['grupoytiempo_letracolor' => 'color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetPlantillas()
    {
        return $this->hasMany(CarnetPlantilla::className(), ['visitante_color' => 'color']);
    }
}
