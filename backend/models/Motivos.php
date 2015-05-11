<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.motivos".
 *
 * @property integer $idmotivos
 * @property string $descripcion
 *
 * @property CtrlVisitantes[] $ctrlVisitantes
 */
class Motivos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.motivos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idmotivos', 'descripcion'], 'required'],
            [['idmotivos'], 'integer'],
            [['descripcion'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idmotivos' => 'Idmotivos',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtrlVisitantes()
    {
        return $this->hasMany(CtrlVisitantes::className(), ['idmotivos' => 'idmotivos']);
    }
}
