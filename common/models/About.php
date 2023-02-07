<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $about
 * @property string $name
 * @property string $subject
 * @property string $create
 * @property string $website
 * @property string $phone
 * @property string $city
 * @property string $age
 * @property string $degree
 * @property string $email
 * @property string $freelance
 * @property string $text
 * @property string $img
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['about', 'name', 'subject', 'create', 'website', 'phone', 'city', 'age', 'degree', 'email', 'freelance', 'text', 'img'], 'required'],
            [['about', 'name', 'subject', 'create', 'website', 'phone', 'city', 'age', 'degree', 'email', 'freelance', 'text'], 'string', 'max' => 255],
            [['img'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about' => 'About',
            'name' => 'Name',
            'subject' => 'Subject',
            'create' => 'Create',
            'website' => 'Website',
            'phone' => 'Phone',
            'city' => 'City',
            'age' => 'Age',
            'degree' => 'Degree',
            'email' => 'Email',
            'freelance' => 'Freelance',
            'text' => 'Text',
            'img' => 'Img',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AboutQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AboutQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->img;
    }
}
