<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exan_paper_relation".
 *
 * @property integer $id
 * @property string $exam_id
 * @property integer $subject_id
 * @property integer $question_id
 */
class ExamPaperRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exan_paper_relation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exam_id', 'subject_id', 'question_id'], 'required'],
            [['exam_id', 'subject_id', 'question_id'], 'integer'],
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
            'exam_id' => 'Exam ID',
            'subject_id' => 'Subject ID',
            'question_id' => 'Question ID',
        ];
    }
}
