<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quick_exam_setting".
 *
 * @property integer $id
 * @property integer $no_of_question
 * @property double $mark_per_question
 * @property double $negative_mark_per_question
 * @property string $time
 */
class QuickExamSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quick_exam_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_of_question', 'mark_per_question', 'negative_mark_per_question', 'time'], 'required'],
            [['no_of_question'], 'integer'],
            [['mark_per_question', 'negative_mark_per_question'], 'number'],
            [['time'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_of_question' => 'No Of Question',
            'mark_per_question' => 'Mark Per Question',
            'negative_mark_per_question' => 'Negative Mark Per Question',
            'time' => 'Time',
        ];
    }
}
