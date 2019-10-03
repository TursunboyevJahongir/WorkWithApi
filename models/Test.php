<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string $name
 * @property string $body
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'test' => [
//                'class' => \yii\filters\VerbFilter::className(),
//                'actions' => [
//                    'id'  => ['GET'],
//                    'name'   => ['GET', 'PUT', 'POST','DELETE'],
//                    'body'   => ['GET', 'PUT', 'POST','DELETE'],
//                    'int'   => ['GET', 'PUT', 'POST','DELETE'],
//                    'bool'   => ['GET', 'PUT', 'POST','DELETE'],
//                    'double'   => ['GET', 'PUT', 'POST','DELETE'],
//                ],
//            ],
//        ];
//    }

    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body', 'name'], 'required'],
            [['body'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['int'],'integer'],
            [['bool'],'boolean'],
            [['double'],'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'body' => 'Body',
            'int' => 'Int',
            'bool' => 'Bool',
            'double' => 'Double',
        ];
    }
}
