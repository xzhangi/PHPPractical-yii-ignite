<?php
    namespace app\models;
    use Yii;
    use yii\base\Model;
    use yii\db\ActiveRecord;

    class InterestForm extends ActiveRecord
    {
        public static function tableName() 
        {
            return 'interest';
        }

        public function rules()
        {
            return [
                //name, email and mobile are required
                [['name', 'email', 'mobile'], 'required'],
                //email is validated to check if it's a valid email address
                ['email', 'email'],
                //mobile is validated to check if it's a number
                ['mobile', 'number'],
            ];
        }
    }
?>