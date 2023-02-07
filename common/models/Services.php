<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $work_n
 * @property string $work_t
 * @property string $know_n
 * @property string $know_t
 * @property string $language_n
 * @property string $language_t
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text', 'work_n', 'work_t', 'know_n', 'know_t', 'language_n', 'language_t'], 'required'],
            [['name', 'text', 'work_n', 'work_t', 'know_n', 'know_t', 'language_n', 'language_t'], 'string', 'max' => 255],
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
            'work_n' => 'Work N',
            'work_t' => 'Work T',
            'know_n' => 'Know N',
            'know_t' => 'Know T',
            'language_n' => 'Language N',
            'language_t' => 'Language T',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ServicesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ServicesQuery(get_called_class());
    }
}
