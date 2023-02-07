<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $subject
 * @property string $email
 * @property string $phone
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject', 'email', 'phone'], 'required'],
            [['subject', 'email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject' => 'Subject',
            'email' => 'Email',
            'phone' => 'Phone',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ContactQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ContactQuery(get_called_class());
    }
}
