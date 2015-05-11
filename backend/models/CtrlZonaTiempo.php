<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.ctrl_zona_tiempo".
 *
 * @property integer $indice
 * @property string $descripcion
 * @property boolean $disp_feriado
 * @property integer $nivel
 * @property integer $indicelink
 * @property integer $domingodesde
 * @property integer $domingohasta
 * @property integer $lunesdesde
 * @property integer $luneshasta
 * @property integer $martesdesde
 * @property integer $marteshasta
 * @property integer $miercolesdesde
 * @property integer $miercoleshasta
 * @property integer $juevesdesde
 * @property integer $jueveshasta
 * @property integer $viernesdesde
 * @property integer $vierneshasta
 * @property integer $sabadodesde
 * @property integer $sabadohasta
 *
 * @property RegGrupoytiempo[] $regGrupoytiempos
 */
class CtrlZonaTiempo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.ctrl_zona_tiempo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['indice', 'descripcion'], 'required'],
            [['indice', 'nivel', 'indicelink', 'domingodesde', 'domingohasta', 'lunesdesde', 'luneshasta', 'martesdesde', 'marteshasta', 'miercolesdesde', 'miercoleshasta', 'juevesdesde', 'jueveshasta', 'viernesdesde', 'vierneshasta', 'sabadodesde', 'sabadohasta'], 'integer'],
            [['disp_feriado'], 'boolean'],
            [['descripcion'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'indice' => 'Indice',
            'descripcion' => 'Descripcion',
            'disp_feriado' => '¿Disponible en Feriados?',
            'nivel' => 'Nivel',
            'indicelink' => 'Indice link',
            'domingodesde' => 'Domingo desde',
            'domingohasta' => 'Domingo hasta',
            'lunesdesde' => 'Lunes desde',
            'luneshasta' => 'Lunes hasta',
            'martesdesde' => 'Martes desde',
            'marteshasta' => 'Martes hasta',
            'miercolesdesde' => 'Miercoles desde',
            'miercoleshasta' => 'Miercoles hasta',
            'juevesdesde' => 'Jueves desde',
            'jueveshasta' => 'Jueves hasta',
            'viernesdesde' => 'Viernes desde',
            'vierneshasta' => 'Viernes hasta',
            'sabadodesde' => 'Sabado desde',
            'sabadohasta' => 'Sabado hasta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegGrupoytiempos()
    {
        return $this->hasMany(RegGrupoytiempo::className(), ['idzonadetiempo' => 'indice']);
    }
}
