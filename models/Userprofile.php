<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userprofile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $institute
 * @property string $father_name
 * @property string $course
 * @property integer $mobile_number
 */
class Userprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'institute', 'father_name', 'course', 'mobile_number'], 'required'],
            [['user_id', 'mobile_number'], 'integer'],
            [['name', 'father_name'], 'string', 'max' => 100],
            [['institute'], 'string', 'max' => 255],
            [['course'], 'string', 'max' => 50],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'name' => 'Name',
            'institute' => 'Institute',
            'father_name' => 'Father Name',
            'course' => 'Course',
            'mobile_number' => 'Mobile Number',
        ];
    }
}
