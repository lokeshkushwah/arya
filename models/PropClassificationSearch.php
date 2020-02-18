<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PropClassification;

/**
 * PropClassificationSearch represents the model behind the search form of `app\models\PropClassification`.
 */
class PropClassificationSearch extends PropClassification
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'img'], 'integer'],
            [['classification'], 'safe'],
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
        $query = PropClassification::find();

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
            'img' => $this->img,
        ]);

        $query->andFilterWhere(['like', 'classification', $this->classification]);

        return $dataProvider;
    }
}
