<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test2".
 *
 * @property integer $id
 * @property integer $test_id
 * @property integer $a
 * @property integer $b
 */
class Test2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'a', 'b'], 'required'],
            [['test_id', 'a', 'b'], 'integer'],
            [['test_id'], 'exist', 'skipOnError' => true, 'targetClass' => Test::className(), 'targetAttribute' => ['test_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test_id' => 'Test ID',
            'a' => 'A',
            'b' => 'B',
        ];
    }
}
