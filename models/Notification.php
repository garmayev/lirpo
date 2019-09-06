<?php
	namespace lirpo\models;
	use Yii;

	class Notification extends \yii\db\ActiveRecord {
		public static function tableName() {
			return 'notification';
		}

	    public function rules()
	    {
	        return [
	            [['message', 'type', 'user_id', 'date'], 'required'],
	            [['type', 'date'], 'integer'],
	            [['message', 'date'], 'string'],
	        ];
	    }
	}
?>