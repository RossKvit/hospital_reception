<?php

namespace app\models;

use yii\base\Model;

class OrderForm extends Model
{
    public $name;
    // public $doc_id;
    // public $time;

    public function rules()
    {
        return [
            [['name'], 'required'],

        ];
    }
    
   
}
?>