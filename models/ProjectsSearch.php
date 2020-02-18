<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Projects;

/**
 * ProjectsSearch represents the model behind the search form of `app\models\Projects`.
 */
class ProjectsSearch extends Projects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'reason_id', 'built_area', 'total_area', 'area_id', 'no_of_units', 'city_id', 'status_id', 'type_id', 'classification_id', 'user_id'], 'integer'],
            [['project_name', 'possession', 'location', 'address', 'lat_long_address', 'short_desc', 'long_desc', 'extra_note', 'img', 'approved'], 'safe'],
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
        $query = Projects::find();

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
            'reason_id' => $this->reason_id,
            'possession' => $this->possession,
            'built_area' => $this->built_area,
            'total_area' => $this->total_area,
            'area_id' => $this->area_id,
            'no_of_units' => $this->no_of_units,
            'city_id' => $this->city_id,
            'status_id' => $this->status_id,
            'type_id' => $this->type_id,
            'classification_id' => $this->classification_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'project_name', $this->project_name])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'lat_long_address', $this->lat_long_address])
            ->andFilterWhere(['like', 'short_desc', $this->short_desc])
            ->andFilterWhere(['like', 'long_desc', $this->long_desc])
            ->andFilterWhere(['like', 'extra_note', $this->extra_note])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'approved', $this->approved]);

        return $dataProvider;
    }
}
