<?php

namespace app\models;

class Test extends \yii\db\ActiveRecord{
    public static function tableName(){
        return 'test';
    }

    public function scenarios(){
        return [
            'scenario1'=>['id','title','time','price']
        ];
    }
}
?>