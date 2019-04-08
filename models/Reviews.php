<?php
namespace app\models;

use yii\db\ActiveRecord;

class Reviews extends ActiveRecord{
	public function afterFind(){
		$this->video = $this->youtube("(youtube:".$this->video.",480,295)");
	
	}

	private function youtube($text){
		$reg = "/{youtube:([\w-_]*)?,(\d*)?}/i"
		$text = preg_replase($reg, str_replase(array("%name%","%width%","%height%"),array("\\1","\\2","\\3"),file_get_contents(Yii::$app->basePath.Yii::$app->params["dir_tmpl"]."youtube.tpl")), $text);

		return $text;
	}
} 

?>