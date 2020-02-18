<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ExanPaperRelation;

/**
 * ExanPaperRelationSearch represents the model behind the search form of `app\models\ExanPaperRelation`.
 */
class ExamPaperRelationSearch extends ExanPaperRelation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'exam_id', 'subject_id', 'question_id'], 'integer'],
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
        $query = ExanPaperRelation::find();

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
            'exam_id' => $this->exam_id,
            'subject_id' => $this->subject_id,
            'question_id' => $this->question_id,
        ]);

        return $dataProvider;
    }
}
