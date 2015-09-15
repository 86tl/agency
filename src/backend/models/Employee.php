<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
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
 * @property integer $company_id
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
            [['user_id', 'age', 'company_id'], 'integer'],
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
            'user_id' => 'User ID',
            'status' => 'Status',
            'rating' => '評分總平均分數',
            'identity_authorized' => '实名认证',
            'mobile_authorized' => '手机认证',
            'service_type' => 'Service Type',
            'is_cleaning' => '是否保潔種類 ',
            'is_housekeeper' => '是否保姆種類',
            'is_elderlycare' => '是否照顧老人種類',
            'is_matron' => '是否月嫂種類',
            'is_cook' => 'Is Cook',
            'is_babysitter' => '是否育嬰種類',
            'intro' => '個人介紹',
            'age' => '年齡',
            'gender' => '性別',
            'nationality' => '民族',
            'language' => '語言',
            'last_update' => '最後更新時間',
            'create_time' => '提交時間',
            'image' => '照片',
            'company_id' => '中介公司',
        ];
    }
}
