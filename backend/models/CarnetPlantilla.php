<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.carnet_plantilla".
 *
 * @property integer $idcarnet_plantilla
 * @property string $carnet_plantilla
 * @property string $orientacion
 * @property string $archivo_plantilla
 * @property string $nombreapellido_color
 * @property string $nombreapellido_fuenteletra
 * @property string $cedula_color
 * @property string $cedula_fuenteletra
 * @property string $fecha_color
 * @property string $fecha_fuentetamano
 * @property string $fecha_fuenteletra
 * @property string $visitante_color
 *
 * @property CarnetCargo[] $carnetCargos
 * @property CarnetVisitante[] $carnetVisitantes
 * @property CarnetDepartamento[] $carnetDepartamentos
 * @property CarnetEmpleado[] $carnetEmpleados
 * @property CarnetGrupoytiempo[] $carnetGrupoytiempos
 * @property CarnetColores $nombreapellidoColor
 * @property CarnetColores $cedulaColor
 * @property CarnetColores $fechaColor
 * @property CarnetColores $visitanteColor
 */
class CarnetPlantilla extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.carnet_plantilla';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['carnet_plantilla', 'archivo_plantilla', 'nombreapellido_color', 'nombreapellido_fuenteletra', 'cedula_color', 'cedula_fuenteletra', 'fecha_fuentetamano', 'fecha_fuenteletra'], 'required'],
            [['fecha_fuentetamano'], 'number'],
            [['carnet_plantilla'], 'string', 'max' => 100],
            [['orientacion'], 'string', 'max' => 1],
            [['archivo_plantilla'], 'string', 'max' => 255],
            [['nombreapellido_color', 'nombreapellido_fuenteletra', 'cedula_color', 'fecha_color', 'visitante_color'], 'string', 'max' => 10],
            [['cedula_fuenteletra', 'fecha_fuenteletra'], 'string', 'max' => 50],
            [['carnet_plantilla'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idcarnet_plantilla' => 'Idcarnet Plantilla',
            'carnet_plantilla' => 'Carnet Plantilla',
            'orientacion' => 'Orientacion',
            'archivo_plantilla' => 'Archivo Plantilla',
            'nombreapellido_color' => 'Nombreapellido Color',
            'nombreapellido_fuenteletra' => 'Nombreapellido Fuenteletra',
            'cedula_color' => 'Cedula Color',
            'cedula_fuenteletra' => 'Cedula Fuenteletra',
            'fecha_color' => 'Fecha Color',
            'fecha_fuentetamano' => 'Fecha Fuentetamano',
            'fecha_fuenteletra' => 'Fecha Fuenteletra',
            'visitante_color' => 'Visitante Color',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetCargos()
    {
        return $this->hasMany(CarnetCargo::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetVisitantes()
    {
        return $this->hasMany(CarnetVisitante::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetDepartamentos()
    {
        return $this->hasMany(CarnetDepartamento::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetEmpleados()
    {
        return $this->hasMany(CarnetEmpleado::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetGrupoytiempos()
    {
        return $this->hasMany(CarnetGrupoytiempo::className(), ['idcarnet_plantilla' => 'idcarnet_plantilla']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNombreapellidoColor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'nombreapellido_color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCedulaColor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'cedula_color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFechaColor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'fecha_color']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisitanteColor()
    {
        return $this->hasOne(CarnetColores::className(), ['color' => 'visitante_color']);
    }
}
