<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam_user".
 *
 * @property integer $id
 * @property integer $user
 * @property string $exam
 */
class ExamUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'exam_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user', 'exam'], 'required'],
            [['user', 'exam'], 'integer'],
            [['exam'], 'exist', 'skipOnError' => true, 'targetClass' => Exam::className(), 'targetAttribute' => ['exam' => 'id']],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'exam' => 'Exam',
        ];
    }
}
