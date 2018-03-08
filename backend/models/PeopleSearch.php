<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\People;

/**
 * PeopleSearch represents the model behind the search form of `backend\models\People`.
 */
class PeopleSearch extends People
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['people_id', 'job_title_id', 'status_id', 'create_id', 'update_id'], 'integer'],
            [['people_name', 'email', 'join_date', 'create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = People::find();

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
            'people_id' => $this->people_id,
            'job_title_id' => $this->job_title_id,
            'join_date' => $this->join_date,
            'status_id' => $this->status_id,
            'create_date' => $this->create_date,
            'create_id' => $this->create_id,
            'update_date' => $this->update_date,
            'update_id' => $this->update_id,
        ]);

        $query->andFilterWhere(['like', 'people_name', $this->people_name])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
