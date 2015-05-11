<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_visitante".
 *
 * @property integer $idcarnet_visitante
 * @property integer $idcarnet_plantilla
 * @property integer $ced_visitante
 *
 * @property CarnetVisitanteImp[] $carnetVisitanteImps
 * @property RegVisitantes $cedVisitante
 * @property CarnetPlantilla $idcarnetPlantilla
 */
class CarnetVisitante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_visitante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_plantilla', 'ced_visitante'], 'required'],
            [['idcarnet_plantilla', 'ced_visitante'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarnet_visitante' => 'Idcarnet Visitante',
            'idcarnet_plantilla' => 'Idcarnet Plantilla',
            'ced_visitante' => 'Ced Visitante',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetVisitanteImps()
    {
        return $this->hasMany(CarnetVisitanteImp::className(), ['idcarnet_visitante' => 'idcarnet_visitante']);
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
    public function getIdcarnetPlantilla()
    {
        return $this->hasOne(CarnetPlantilla::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }
}
