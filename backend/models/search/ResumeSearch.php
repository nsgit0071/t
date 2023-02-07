<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Resume;

/**
 * ResumeSearch represents the model behind the search form of `common\models\Resume`.
 */
class ResumeSearch extends Resume
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['resume', 'name', 'sumary', 'sumary_n', 'sumary_t', 'sumary_l', 'sumary_w', 'education', 'education_name', 'education_y', 'education_n2', 'education_t', 'smm', 'smm_y', 'smm_t', 'smm1', 'smm2', 'smm3', 'professional', 'professional_n', 'professional_y', 'professional_t', 'professional_l', 'professional1', 'professional2', 'professional3'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Resume::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'resume', $this->resume])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'sumary', $this->sumary])
            ->andFilterWhere(['like', 'sumary_n', $this->sumary_n])
            ->andFilterWhere(['like', 'sumary_t', $this->sumary_t])
            ->andFilterWhere(['like', 'sumary_l', $this->sumary_l])
            ->andFilterWhere(['like', 'sumary_w', $this->sumary_w])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'education_name', $this->education_name])
            ->andFilterWhere(['like', 'education_y', $this->education_y])
            ->andFilterWhere(['like', 'education_n2', $this->education_n2])
            ->andFilterWhere(['like', 'education_t', $this->education_t])
            ->andFilterWhere(['like', 'smm', $this->smm])
            ->andFilterWhere(['like', 'smm_y', $this->smm_y])
            ->andFilterWhere(['like', 'smm_t', $this->smm_t])
            ->andFilterWhere(['like', 'smm1', $this->smm1])
            ->andFilterWhere(['like', 'smm2', $this->smm2])
            ->andFilterWhere(['like', 'smm3', $this->smm3])
            ->andFilterWhere(['like', 'professional', $this->professional])
            ->andFilterWhere(['like', 'professional_n', $this->professional_n])
            ->andFilterWhere(['like', 'professional_y', $this->professional_y])
            ->andFilterWhere(['like', 'professional_t', $this->professional_t])
            ->andFilterWhere(['like', 'professional_l', $this->professional_l])
            ->andFilterWhere(['like', 'professional1', $this->professional1])
            ->andFilterWhere(['like', 'professional2', $this->professional2])
            ->andFilterWhere(['like', 'professional3', $this->professional3]);

        return $dataProvider;
    }
}
