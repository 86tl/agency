<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property integer $agency_id
 * @property integer $user_id
 * @property string $status
 * @property string $rating
 * @property string $identity_authorized
 * @property string $mobile_authorized
 * @property string $service_type
 * @property string $is_cleaning
 * @property string $is_housekeeper
 * @property string $is_elderlycare
 * @property string $is_matron
 * @property string $is_cook
 * @property string $is_babysitter
 * @property string $intro
 * @property integer $age
 * @property string $gender
 * @property string $nationality
 * @property string $language
 * @property string $last_update
 * @property string $create_time
 * @property string $image
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agency_id', 'user_id', 'age'], 'integer'],
            [['last_update', 'create_time'], 'safe'],
            [['status'], 'string', 'max' => 30],
            [['rating', 'is_cleaning', 'is_housekeeper', 'is_elderlycare', 'is_matron', 'is_cook', 'is_babysitter', 'nationality', 'language'], 'string', 'max' => 10],
            [['identity_authorized', 'mobile_authorized', 'gender'], 'string', 'max' => 1],
            [['service_type'], 'string', 'max' => 20],
            [['intro'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'agency_id' => 'Agency ID',
            'user_id' => '连接user',
            'status' => '当前状态',
            'rating' => '总平均分数',
            'identity_authorized' => 'Identity Authorized',
            'mobile_authorized' => 'Mobile Authorized',
            'service_type' => '服务类型',
            'is_cleaning' => '是否保洁',
            'is_housekeeper' => '是否保姆',
            'is_elderlycare' => '是否照顾老人',
            'is_matron' => '是否月嫂',
            'is_cook' => '是否厨嫂',
            'is_babysitter' => '是否育婴',
            'intro' => '个人介绍',
            'age' => '年龄',
            'gender' => '性别',
            'nationality' => '民族',
            'language' => '语言',
            'last_update' => '最后更新时间',
            'create_time' => '创建时间',
            'image' => '照片',
        ];
    }
}
