<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property string $id
 * @property string $subject_id
 * @property string $question_desc
 * @property string $question_option1
 * @property string $question_option2
 * @property string $question_option3
 * @property string $question_option4
 * @property string $question_option5
 * @property integer $correct_answar
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_id',  'correct_answar'], 'required'],
            [['subject_id', 'correct_answar' ], 'integer'],
            [['question_desc','question_option5' , 'question_option3', 'question_option4' ,'question_desc', 'question_option1', 'question_option2',], 'string'],
            [['question_option1', 'question_option2', 'question_option3', 'question_option4', 'question_option5'], 'string', 'max' => 255],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_id' => 'Subject ID',
            'question_desc' => 'Question Desc',
            'question_option1' => 'Question Option1',
            'question_option2' => 'Question Option2',
            'question_option3' => 'Question Option3',
            'question_option4' => 'Question Option4',
            'question_option5' => 'Question Option5',
            'correct_answar' => 'Correct Answar',
        ];
    }
}
