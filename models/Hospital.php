<?php
namespace app\models;

use Yii;

use yii\db\ActiveRecord;

class Hospital extends ActiveRecord{

	public function afterFind(){
		$this->img = "/web/images/hospital/".$this->img;
	}
} 

?>