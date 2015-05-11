<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.reg_grupo".
 *
 * @property integer $idgrupo
 * @property string $nombre
 * @property string $descripcion
 *
 * @property RegGrupoytiempo[] $regGrupoytiempos
 */
class RegGrupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.reg_grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idgrupo' => 'Idgrupo',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegGrupoytiempos()
    {
        return $this->hasMany(RegGrupoytiempo::className(), ['idgrupo' => 'idgrupo']);
    }
}
