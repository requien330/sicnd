<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_empleado".
 *
 * @property integer $idcarnet_empleado
 * @property integer $idcarnet_plantilla
 * @property integer $idcarnet_departamento
 * @property integer $idcarnet_cargo
 * @property integer $ced_empleado
 * @property string $fecha_vencimiento
 * @property integer $idcarnet_grupoytiempo
 *
 * @property CarnetEmpleadoImp[] $carnetEmpleadoImps
 * @property MEmpleados $cedEmpleado
 * @property CarnetCargo $idcarnetCargo
 * @property CarnetDepartamento $idcarnetDepartamento
 * @property CarnetPlantilla $idcarnetPlantilla
 * @property CarnetGrupoytiempo $idcarnetGrupoytiempo
 */
class CarnetEmpleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idcarnet_plantilla', 'idcarnet_departamento', 'idcarnet_cargo', 'ced_empleado', 'idcarnet_grupoytiempo'], 'required'],
            [['idcarnet_plantilla', 'idcarnet_departamento', 'idcarnet_cargo', 'ced_empleado', 'idcarnet_grupoytiempo'], 'integer'],
            [['fecha_vencimiento'], 'safe'],
            [['ced_empleado'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarnet_empleado' => 'Id carnet del Empleado',
            'idcarnet_plantilla' => 'Identificacion del carnet Plantilla',
            'idcarnet_departamento' => 'Id carnet del Departamento',
            'idcarnet_cargo' => 'Id carnet del Cargo',
            'idcarnet_grupoytiempo' => 'Idcarnet Grupoytiempo',
            'ced_empleado' => 'Cedula del Empleado',
            'fecha_vencimiento' => 'Fecha Vencimiento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetEmpleadoImps()
    {
        return $this->hasMany(CarnetEmpleadoImp::className(), ['idcarnet_empleado' => 'idcarnet_empleado']);
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
    public function getIdcarnetCargo()
    {
        return $this->hasOne(CarnetCargo::className(), ['idcarnet_cargo' => 'idcarnet_cargo']);
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
    public function getIdcarnetPlantilla()
    {
        return $this->hasOne(CarnetPlantilla::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcarnetGrupoytiempo()
    {
        return $this->hasOne(CarnetGrupoytiempo::className(), ['idcarnet_grupoytiempo' => 'idcarnet_grupoytiempo']);
    }
}
