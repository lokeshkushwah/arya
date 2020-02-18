<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserAdmin;

/**
 * UserAdminSearch represents the model behind the search form of `app\models\UserAdmin`.
 */
class GroupUserSearch extends UserAdmin {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['id', 'mobile','batch', 'role', 'status', 'created_at', 'updated_at'], 'integer'],
            [['username', 'name','mobile','course','father_name','auth_key', 'password_hash', 'password_reset_token', 'email', 'reg_key'], 'safe'],
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
        $batch = \Yii::$app->user->identity->batch;
        $query = UserAdmin::find()->where("batch=$batch")->orderBy('id DESC');

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
            'name' => $this->name,
            'mobile' => $this->mobile,
            'course' => $this->course,
            'father_name' => $this->father_name,
            'batch' => $this->batch,
            'role' => $this->role,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
                ->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'father_name', $this->father_name])
                ->andFilterWhere(['like', 'course', $this->course])
                ->andFilterWhere(['like', 'mobile', $this->mobile])
                ->andFilterWhere(['like', 'auth_key', $this->auth_key])
                ->andFilterWhere(['like', 'password_hash', $this->password_hash])
                ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
                ->andFilterWhere(['like', 'email', $this->email])
                ->andFilterWhere(['like', 'reg_key', $this->reg_key]);

        return $dataProvider;
    }

}
