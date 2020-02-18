<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QuickExamSetting;

/**
 * QuickExamSettingSearch represents the model behind the search form of `app\models\QuickExamSetting`.
 */
class QuickExamSettingSearch extends QuickExamSetting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'no_of_question'], 'integer'],
            [['mark_per_question', 'negative_mark_per_question'], 'number'],
            [['time'], 'safe'],
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
        $query = QuickExamSetting::find();

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
            'no_of_question' => $this->no_of_question,
            'mark_per_question' => $this->mark_per_question,
            'negative_mark_per_question' => $this->negative_mark_per_question,
        ]);

        $query->andFilterWhere(['like', 'time', $this->time]);

        return $dataProvider;
    }
}
