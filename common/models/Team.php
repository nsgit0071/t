<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $team_n
 * @property string $img
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * {@inheritdoc}
     */
    public $file;
    public function rules()
    {
        return [
            [['name', 'text', 'team_n', 'img'], 'required'],
            [['name', 'text', 'team_n'], 'string', 'max' => 255],
            [['img','file'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'team_n' => 'Team N',
            'img' => 'Img',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\TeamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\TeamQuery(get_called_class());
    }
    public function getImageUrl(){
        return Yii::$app->params['backendUrl'].'uploads/'.$this->img;
    }
}
