<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpecificationProjectsRelation;

/**
 * SpecificationProjectsRelationSearch represents the model behind the search form of `app\models\SpecificationProjectsRelation`.
 */
class SpecificationProjectsRelationSearch extends SpecificationProjectsRelation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'specification_id', 'projects_id'], 'integer'],
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
        $query = SpecificationProjectsRelation::find();

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
            'specification_id' => $this->specification_id,
            'projects_id' => $this->projects_id,
        ]);

        return $dataProvider;
    }
}
