<?php 
//edited by mouadh aouiti 08-12-2019 in after 8 coffee :D
namespace app\models;
use yii\db\ActiveRecord;

class posts extends ActiveRecord{
		
		private $title;
		private $description;
		private $category;
		
		
	public function rules(){
		return[
		   [['title','description','category'], 'required']
		];
		
		
		
	}
		
		
		
	}
?>