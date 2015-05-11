<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "public.imagen".
 *
 * @property integer $id
 * @property string $url_foto
 * @property string $archivo
 * @property string $color_dpt
 * @property string $color_crg
 * @property string $color_gyt
 *
 * @property CarnetColores $colorDpt
 * @property CarnetColores $colorCrg
 * @property CarnetColores $colorGyt
 */
class Imagen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'public.imagen';
    }

    /**
     * @inheritdoc
     */
    public $file;
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['file'], 'file'],
            [['archivo', 'color_dpt', 'color_crg', 'color_gyt'], 'string'],
            [['url_foto'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'Url Foto',
            'archivo' => 'Archivo',
            'color_dpt' => 'Color Dpt',
            'color_crg' => 'Color Crg',
            'color_gyt' => 'Color Gyt',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColorDpt()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'color_dpt']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColorCrg()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'color_crg']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getColorGyt()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'color_gyt']);
    }
}
