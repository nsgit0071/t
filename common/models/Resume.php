<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "resume".
 *
 * @property int $id
 * @property string $resume
 * @property string $name
 * @property string $sumary
 * @property string $sumary_n
 * @property string $sumary_t
 * @property string $sumary_l
 * @property string $sumary_w
 * @property string $education
 * @property string $education_name
 * @property string $education_y
 * @property string $education_n2
 * @property string $education_t
 * @property string $smm
 * @property string $smm_y
 * @property string $smm_t
 * @property string $smm1
 * @property string $smm2
 * @property string $smm3
 * @property string $professional
 * @property string $professional_n
 * @property string $professional_y
 * @property string $professional_t
 * @property string $professional_l
 * @property string $professional1
 * @property string $professional2
 * @property string $professional3
 */
class Resume extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'resume';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resume', 'name', 'sumary', 'sumary_n', 'sumary_t', 'sumary_l', 'sumary_w', 'education', 'education_name', 'education_y', 'education_n2', 'education_t', 'smm', 'smm_y', 'smm_t', 'smm1', 'smm2', 'smm3', 'professional', 'professional_n', 'professional_y', 'professional_t', 'professional_l', 'professional1', 'professional2', 'professional3'], 'required'],
            [['resume', 'name', 'sumary', 'sumary_n', 'sumary_t', 'sumary_l', 'sumary_w', 'education', 'education_name', 'education_y', 'education_n2', 'education_t', 'smm', 'smm_y', 'smm_t', 'smm1', 'smm2', 'smm3', 'professional', 'professional_n', 'professional_y', 'professional_t', 'professional_l', 'professional1', 'professional2', 'professional3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'resume' => 'Resume',
            'name' => 'Name',
            'sumary' => 'Sumary',
            'sumary_n' => 'Sumary N',
            'sumary_t' => 'Sumary T',
            'sumary_l' => 'Sumary L',
            'sumary_w' => 'Sumary W',
            'education' => 'Education',
            'education_name' => 'Education Name',
            'education_y' => 'Education Y',
            'education_n2' => 'Education N2',
            'education_t' => 'Education T',
            'smm' => 'Smm',
            'smm_y' => 'Smm Y',
            'smm_t' => 'Smm T',
            'smm1' => 'Smm1',
            'smm2' => 'Smm2',
            'smm3' => 'Smm3',
            'professional' => 'Professional',
            'professional_n' => 'Professional N',
            'professional_y' => 'Professional Y',
            'professional_t' => 'Professional T',
            'professional_l' => 'Professional L',
            'professional1' => 'Professional1',
            'professional2' => 'Professional2',
            'professional3' => 'Professional3',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ResumeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ResumeQuery(get_called_class());
    }
}
