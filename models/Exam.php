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
 */
class Exam extends \yii\db\ActiveRecord
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
            [['exam_title', 'start', 'end'], 'required'],
            [['start', 'end'], 'safe'],
            [['exam_title'], 'string', 'max' => 255],
          
            [['nagitive_marks'], 'number'],
            [['marks_per_question'], 'number'],
           
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
           // 'total_marks'=>'Total Mark',
            'nagitive_marks'=>'Nagitive Marks',
            'marks_per_question'=>'Marks ',
          //  'negitive_marks_on_question'=>'Negitive Marks On Question'
        ];
    }
}
