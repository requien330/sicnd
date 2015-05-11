<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_grupoytiempo".
 *
 * @property integer $idcarnet_grupoytiempo
 * @property string $grupoytiempo_nombre
 * @property string $grupoytiempo_color
 * @property integer $idcarnet_plantilla
 * @property string $grupoytiempo_letracolor
 *
 * @property CarnetEmpleado[] $carnetEmpleados
 * @property CarnetPlantilla $idcarnetPlantilla
 * @property CarnetColores $grupoytiempoColor
 * @property CarnetColores $grupoytiempoLetracolor
 */
class CarnetGrupoytiempo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_grupoytiempo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_plantilla'], 'integer'],
            [['grupoytiempo_nombre'], 'string', 'max' => 100],
            [['grupoytiempo_color', 'grupoytiempo_letracolor'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarnet_grupoytiempo' => 'Id carnet del Grupo y tiempo',
            'idcarnet_plantilla' => 'Id carnet Plantilla',
            'grupoytiempo_nombre' => 'Nombre del Grupo y tiempo',
            'grupoytiempo_color' => 'Color representativo del Grupoytiempo ',
            'grupoytiempo_letracolor' => 'Grupoytiempo Letra color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetEmpleados()
    {
        return $this->hasMany(CarnetEmpleado::className(), ['idcarnet_grupoytiempo' => 'idcarnet_grupoytiempo']);
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
    public function getGrupoytiempoColor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'grupoytiempo_color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoytiempoLetracolor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'grupoytiempo_letracolor']);
    }
}
