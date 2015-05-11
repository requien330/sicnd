<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "m_general_admin.m_empleados".
 *
 * @property string $ced_empleado
 * @property string $ape_empleado
 * @property string $nom_empleado
 * @property string $dir_empleado
 * @property boolean $es_venezolano
 * @property boolean $es_masculino
 * @property string $fec_empleado
 * @property integer $edo_empleado
 * @property string $log_empleado
 * @property string $pass_empleado
 * @property integer $cod_nivel
 * @property string $url_foto
 *
 * @property MTelefonos[] $mTelefonos
 * @property MIngrEgre[] $mIngrEgres
 * @property MCorreos[] $mCorreos
 */
class MEmpleados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_general_admin.m_empleados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ced_empleado', 'ape_empleado', 'nom_empleado'], 'required'],
            [['ced_empleado', 'edo_empleado', 'cod_nivel'], 'integer'],
            [['es_venezolano', 'es_masculino'], 'boolean'],
            [['fec_empleado'], 'safe'],
            [['ape_empleado', 'nom_empleado', 'dir_empleado'], 'string', 'max' => 30],
            [['log_empleado'], 'string', 'max' => 32],
            [['pass_empleado'], 'string', 'max' => 64],
            [['url_foto'], 'string', 'max' => 50],
            [['nom_empleado', 'ape_empleado'], 'unique', 'targetAttribute' => ['nom_empleado', 'ape_empleado'], 'message' => 'The combination of Ape Empleado and Nom Empleado has already been taken.'],
            [['ced_empleado'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ced_empleado' => 'Cedula',
            'ape_empleado' => 'Apellido',
            'nom_empleado' => 'Nombres',
            'dir_empleado' => 'Direccion',
            'es_venezolano' => 'Nacionalidad Venezolana',
            'es_masculino' => 'Es Masculino',
            'fec_empleado' => 'Fecha de Nacimiento',
            'edo_empleado' => 'Estado Civil',
            'log_empleado' => 'Alias',
            'pass_empleado' => 'Password Empleado',
            'cod_nivel' => 'Cod Nivel',
            'url_foto' => 'Url Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMTelefonos()
    {
        return $this->hasMany(MTelefonos::className(), ['ced_empleado' => 'ced_empleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMIngrEgres()
    {
        return $this->hasMany(MIngrEgre::className(), ['ced_empleado' => 'ced_empleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMCorreos()
    {
        return $this->hasMany(MCorreos::className(), ['ced_empleado' => 'ced_empleado']);
    }
}
