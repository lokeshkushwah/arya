<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ExamNew;

/**
 * ExamNewSearch represents the model behind the search form of `app\models\ExamNew`.
 */
class ExamNewSearch extends ExamNew
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'explan'], 'integer'],
            [['exam_title', 'start', 'end', 'quick_exam', 'create_on'], 'safe'],
            [['nagitive_marks', 'marks_per_question'], 'number'],
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
        $query = ExamNew::find();

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
            'start' => $this->start,
            'end' => $this->end,
            'nagitive_marks' => $this->nagitive_marks,
            'marks_per_question' => $this->marks_per_question,
            'explan' => $this->explan,
            'create_on' => $this->create_on,
        ]);

        $query->andFilterWhere(['like', 'exam_title', $this->exam_title])
            ->andFilterWhere(['like', 'quick_exam', $this->quick_exam]);

        return $dataProvider;
    }
}
