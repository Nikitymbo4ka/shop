<?php

namespace app\models;

use yii\base\Model;

class PasswordForm extends Model
{
    public $password;

    public function rules()
    {
        return [
            ['password', 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => 'Пароль'
        ];
    }

}