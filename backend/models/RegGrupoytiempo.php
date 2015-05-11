<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.reg_grupoytiempo".
 *
 * @property integer $idgrupoytiempo
 * @property integer $idgrupo
 * @property integer $idzonadetiempo
 *
 * @property RegGrupo $idgrupo0
 * @property CtrlZonaTiempo $idzonadetiempo0
 * @property CtrlUsuario[] $ctrlUsuarios
 */
class RegGrupoytiempo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.reg_grupoytiempo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idgrupo'], 'required'],
            [['idgrupo', 'idzonadetiempo'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idgrupoytiempo' => 'Idgrupoytiempo',
            'idgrupo' => 'Idgrupo',
            'idzonadetiempo' => 'Idzonadetiempo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdgrupo0()
    {
        return $this->hasOne(RegGrupo::className(), ['idgrupo' => 'idgrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdzonadetiempo0()
    {
        return $this->hasOne(CtrlZonaTiempo::className(), ['indice' => 'idzonadetiempo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtrlUsuarios()
    {
        return $this->hasMany(CtrlUsuario::className(), ['idgrupoytiempo' => 'idgrupoytiempo']);
    }
}
