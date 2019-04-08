<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $tel;

    public function rules()
    {
        return [
            [['name', 'email','tel'], 'required'],
            ['email', 'email'],

        ];
    }
    
   
}
?>