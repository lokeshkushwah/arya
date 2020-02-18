<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LegalProjectsRelations;

/**
 * LegalProjectsRelationsSearch represents the model behind the search form of `app\models\LegalProjectsRelations`.
 */
class LegalProjectsRelationsSearch extends LegalProjectsRelations
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'legal_id', 'project_id'], 'integer'],
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
        $query = LegalProjectsRelations::find();

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
            'legal_id' => $this->legal_id,
            'project_id' => $this->project_id,
        ]);

        return $dataProvider;
    }
}
