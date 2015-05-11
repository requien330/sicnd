<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sicnd.reg_visitantes".
 *
 * @property integer $ced_visitante
 * @property string $nombre_visitante
 * @property string $apellido_visitante
 * @property string $sexo_visitante
 * @property integer $telefono_visitante
 * @property integer $telefono_celular_visitante
 * @property string $direccion_visitante
 * @property string $nacionalidad_visitante
 * @property string $fecha_creacion_visitante
 * @property boolean $lista_negra
 * @property string $email_visitante
 * @property string $url_foto
 *
 * @property CtrlVisitantes[] $ctrlVisitantes
 * @property CarnetVisitante[] $carnetVisitantes
 */
class RegVisitantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sicnd.reg_visitantes';
    }
    public $file;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ced_visitante', 'nombre_visitante', 'apellido_visitante', 'sexo_visitante', 'telefono_visitante', 'telefono_celular_visitante', 'direccion_visitante', 'nacionalidad_visitante', 'email_visitante', 'url_foto'], 'required'],
            [['ced_visitante', 'telefono_visitante', 'telefono_celular_visitante'], 'integer'],
            [['fecha_creacion_visitante'], 'safe'],
            [['lista_negra'], 'boolean'],
            [['file'],'file'],
            [['nombre_visitante', 'apellido_visitante', 'email_visitante'], 'string', 'max' => 45],
            [['sexo_visitante', 'nacionalidad_visitante'], 'string', 'max' => 1],
            [['direccion_visitante', 'url_foto'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ced_visitante' => 'Cedula',
            'nombre_visitante' => 'Nombres',
            'apellido_visitante' => 'Apellidos',
            'sexo_visitante' => 'Sexo',
            'telefono_visitante' => 'Telefono Local',
            'telefono_celular_visitante' => 'Telefono Celular',
            'direccion_visitante' => 'Direccion',
            'nacionalidad_visitante' => 'Nacionalidad',
            'fecha_creacion_visitante' => 'Fecha Creacion',
            'lista_negra' => 'Lista Negra',
            'email_visitante' => 'Email',
            'file' => 'Url Foto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtrlVisitantes()
    {
        return $this->hasMany(CtrlVisitantes::className(), ['ced_visitante' => 'ced_visitante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetVisitantes()
    {
        return $this->hasMany(CarnetVisitante::className(), ['ced_visitante' => 'ced_visitante']);
    }
}
