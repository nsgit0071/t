<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property string $text
 * @property string $section
 * @property string $img
 * @property string $file
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'section', 'img', 'file'], 'required'],
            [['section'], 'string'],
            [['text'], 'string', 'max' => 255],
            [['img', 'file'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'section' => 'Section',
            'img' => 'Img',
            'file' => 'File',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PortfolioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PortfolioQuery(get_called_class());
    }
}
