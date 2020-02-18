<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "examintion_user_relation".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $exam_id
 * @property integer $question_id
 * @property integer $given_answar
 * @property integer $correct_answar
 */
class ExamintionUserRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'examintion_user_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'exam_id', 'question_id', 'given_answar', 'correct_answar'], 'required'],
            [['user_id', 'exam_id', 'question_id', 'given_answar', 'correct_answar','result'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exam::className(), 'targetAttribute' => ['exam_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'exam_id' => 'Exam ID',
            'question_id' => 'Question ID',
            'given_answar' => 'Given Answar',
            'correct_answar' => 'Correct Answar',
        ];
    }
}
