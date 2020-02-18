<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Question;

/**
 * QuestionSearch represents the model behind the search form of `app\models\Question`.
 */
class QuestionSearch extends Question {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'subject_id', 'correct_answar'], 'integer'],
            [['question_desc', 'question_option1', 'question_option2', 'question_option3', 'question_option4', 'question_option5'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Question::find()->orderBy('id DESC');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
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
            'subject_id' => $this->subject_id,
            'correct_answar' => $this->correct_answar,
        ]);


        $query->andFilterWhere(['like', 'question_desc', $this->question_desc])
                ->andFilterWhere(['like', 'question_option1', $this->question_option1])
                ->andFilterWhere(['like', 'question_option2', $this->question_option2])
                ->andFilterWhere(['like', 'question_option3', $this->question_option3])
                ->andFilterWhere(['like', 'question_option4', $this->question_option4])
                ->andFilterWhere(['like', 'question_option5', $this->question_option5]);

        return $dataProvider;
    }

}
