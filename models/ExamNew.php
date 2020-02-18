<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam".
 *
 * @property string $id
 * @property string $exam_title
 * @property string $start
 * @property string $end
 * @property double $nagitive_marks
 * @property double $marks_per_question
 * @property string $explan
 * @property string $quick_exam
 * @property string $create_on
 */
class ExamNew extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exam_title', 'start', 'end', 'explan', 'create_on'], 'required'],
            [['start', 'end', 'create_on'], 'safe'],
            [['nagitive_marks', 'marks_per_question'], 'number'],
            [['explan', 'quick_exam'], 'string'],
            [['exam_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'exam_title' => 'Exam Title',
            'start' => 'Start',
            'end' => 'End',
            'nagitive_marks' => 'Nagitive Marks',
            'marks_per_question' => 'Marks Per Question',
            'explan' => 'Explan',
            'quick_exam' => 'Quick Exam',
            'create_on' => 'Create On',
        ];
    }
}
