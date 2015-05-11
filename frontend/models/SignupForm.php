<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $ced_empleado;
    public $rol_id;
    public $estado;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            
            ['ced_empleado', 'required'],
            [['estado'], 'string', 'max' => 15],
            [['rol_id','ced_empleado'], 'integer'],

            
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Usuario',
            'email'=> 'Correo Electronico',
            'password'=> 'password de seguridad',
            'ced_empleado'=> 'cedula del Empleado',
            'rol_id' => 'Rol de Usuario',
            'estado' => 'Estado',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->ced_empleado = $this->ced_empleado;
            $user->rol_id = $this->rol_id;
            $user->estado = $this->estado;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
