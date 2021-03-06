<?php

namespace app\models;

use yii\base\Model;
use app\models\User;

/**
 * Signup form
 */
class SignupForm extends Model {

    public $nama;
    public $username;
    public $email;
    public $password;
    public $captcha;

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                ['nama', 'required'],

                ['username', 'trim'],
                ['username', 'required'],
                ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This username has already been taken.'],
                ['username', 'string', 'min' => 2, 'max' => 255],
                
                ['email', 'trim'],
                ['email', 'required'],
                ['email', 'email'],
                ['email', 'string', 'max' => 255],
                ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This email address has already been taken.'],
                
                ['password', 'required'],
                ['password', 'string', 'min' => 6],
            
                ['captcha', 'required'],
                ['captcha', 'captcha'],
        ];
    }

    public function attributeLabels() {
        return [
            'nama' => 'Nama Lengkap',
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup() {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->nama = $this->nama;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }

}
