<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.ctrl_usuario".
 *
 * @property integer $idusuario
 * @property integer $idgrupoytiempo
 * @property integer $idcarnet_departamento
 * @property integer $numero
 * @property integer $codigo_pin
 * @property string $codigo_id
 * @property string $codigo_sitio
 * @property string $codigo_tarjeta
 * @property integer $tarjetayopin
 * @property string $codigo_bio
 * @property integer $tienefechalimite
 * @property string $fechahasta
 * @property integer $rondasguardias
 * @property integer $skipfpcheck
 * @property integer $modificable
 * @property integer $nivel
 * @property integer $antipassback
 * @property integer $ced_empleado
 *
 * @property MEmpleados $cedEmpleado
 * @property CarnetDepartamento $idcarnetDepartamento
 * @property RegGrupoytiempo $idgrupoytiempo0
 */
class CtrlUsuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.ctrl_usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idgrupoytiempo', 'numero', 'codigo_id', 'codigo_sitio', 'codigo_tarjeta', 'codigo_bio', 'ced_empleado'], 'required'],
            [['idgrupoytiempo', 'idcarnet_departamento', 'numero', 'codigo_pin', 'tarjetayopin', 'tienefechalimite', 'rondasguardias', 'skipfpcheck', 'modificable', 'nivel', 'antipassback', 'ced_empleado'], 'integer'],
            [['fechahasta'], 'safe'],
            [['codigo_id'], 'string', 'max' => 10],
            [['codigo_sitio', 'codigo_tarjeta'], 'string', 'max' => 5],
            [['codigo_bio'], 'string', 'max' => 255],
            [['ced_empleado'], 'unique'],
            [['codigo_id'], 'unique'],
            [['numero'], 'unique'],
            [['codigo_sitio', 'codigo_tarjeta'], 'unique', 'targetAttribute' => ['codigo_sitio', 'codigo_tarjeta'], 'message' => 'The combination of Codigo Sitio and Codigo Tarjeta has already been taken.'],
            [['ced_empleado'], 'unique'],
            [['codigo_id'], 'unique'],
            [['codigo_sitio', 'codigo_tarjeta'], 'unique', 'targetAttribute' => ['codigo_sitio', 'codigo_tarjeta'], 'message' => 'The combination of Codigo Sitio and Codigo Tarjeta has already been taken.'],
            [['numero'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Id del Usuario',
            'idgrupoytiempo' => 'Id del grupo y tiempo',
            'idcarnet_departamento' => 'Id del carnet de Departamento',
            'numero' => 'Numero de Tarjeta',
            'codigo_pin' => 'Codigo Pin de Tarjeta',
            'codigo_id' => 'Codigo ID',
            'codigo_sitio' => 'Codigo Sitio',
            'codigo_tarjeta' => 'Codigo Tarjeta',
            'tarjetayopin' => 'Tarjeta o pin',
            'codigo_bio' => 'Codigo Bio',
            'tienefechalimite' => '¿Tiene fecha limite?',
            'fechahasta' => 'Fecha hasta',
            'rondasguardias' => '¿Ronda guardias?',
            'skipfpcheck' => 'Skipfpcheck',
            'modificable' => '¿Modificable?',
            'nivel' => 'Nivel',
            'antipassback' => 'Antipassback',
            'ced_empleado' => 'Cedula',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedEmpleado()
    {
        return $this->hasOne(MEmpleados::className(), ['ced_empleado' => 'ced_empleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcarnetDepartamento()
    {
        return $this->hasOne(CarnetDepartamento::className(), ['idcarnet_departamento' => 'idcarnet_departamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdgrupoytiempo0()
    {
        return $this->hasOne(RegGrupoytiempo::className(), ['idgrupoytiempo' => 'idgrupoytiempo']);
    }
}
