<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FloorPlan;

/**
 * FloorPlanSearch represents the model behind the search form of `app\models\FloorPlan`.
 */
class FloorPlanSearch extends FloorPlan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'plan_name', 'img', 'projects_id'], 'integer'],
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
        $query = FloorPlan::find();

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
            'plan_name' => $this->plan_name,
            'img' => $this->img,
            'projects_id' => $this->projects_id,
        ]);

        return $dataProvider;
    }
}
