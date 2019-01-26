<?php
    namespace app\models;
    class Book extends \yii\db\ActiveRecord {
        public static function tablename() {
            return 'book';
        }
        public function scenarios() {
            return [
                'book' => ['id', 'name', 'content', 'price']
            ];
        }
    }
?>