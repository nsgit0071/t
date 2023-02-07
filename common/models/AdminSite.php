<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "admin_site".
 *
 * @property int $id
 * @property string $img
 * @property string $name
 * @property string $text
 * @property string $location
 * @property string $email
 * @property string $tel
 */
class AdminSite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_site';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['img', 'name', 'text', 'location', 'email', 'tel'], 'required'],
            [['img','file'], 'string', 'max' => 200],
            [['name', 'text', 'location', 'email', 'tel'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'name' => 'Name',
            'text' => 'Text',
            'location' => 'Location',
            'email' => 'Email',
            'tel' => 'Tel',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AdminSiteQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AdminSiteQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->img;
    }
}
