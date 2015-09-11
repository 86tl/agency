<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_job".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $topic
 * @property string $job_status
 * @property integer $payment_id
 * @property string $service_type
 * @property string $intro
 * @property string $view_time
 * @property string $week
 * @property string $period
 * @property string $city
 * @property string $province
 * @property string $district
 * @property string $address
 * @property string $create_time
 * @property string $term_period
 * @property string $cleaning_type
 * @property string $cleaning_pet_type
 * @property string $work_times
 * @property string $workingdays_perweek
 * @property string $cleaning_time_estimate
 * @property string $estimated_date
 * @property string $cleaning_size
 * @property string $beginning_date
 * @property string $end_date
 * @property string $beginning_time
 * @property string $end_time
 * @property integer $worker
 * @property integer $price_range
 * @property string $stay_type
 * @property string $sex_type
 * @property string $cure_type
 * @property string $baby_age_type
 * @property integer $number_family
 * @property string $food_type
 * @property string $baby_type
 * @property string $longitude
 * @property string $latitude
 */
class PostJob extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_job';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'payment_id', 'worker', 'price_range', 'number_family'], 'integer'],
            [['create_time', 'beginning_date', 'end_date'], 'safe'],
            [['topic', 'period', 'address'], 'string', 'max' => 100],
            [['job_status', 'view_time', 'city', 'province', 'district', 'beginning_time', 'end_time'], 'string', 'max' => 30],
            [['service_type', 'term_period', 'cleaning_pet_type', 'cleaning_size', 'stay_type', 'sex_type', 'cure_type', 'baby_age_type', 'food_type', 'baby_type'], 'string', 'max' => 10],
            [['intro'], 'string', 'max' => 255],
            [['week', 'work_times', 'workingdays_perweek', 'cleaning_time_estimate', 'estimated_date'], 'string', 'max' => 50],
            [['cleaning_type', 'longitude', 'latitude'], 'string', 'max' => 20]
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
            'topic' => 'Topic',
            'job_status' => 'Job Status',
            'payment_id' => 'Payment ID',
            'service_type' => 'Service Type',
            'intro' => 'Intro',
            'view_time' => 'View Time',
            'week' => 'Week',
            'period' => 'Period',
            'city' => 'City',
            'province' => 'Province',
            'district' => 'District',
            'address' => 'Address',
            'create_time' => 'Create Time',
            'term_period' => 'Term Period',
            'cleaning_type' => 'Cleaning Type',
            'cleaning_pet_type' => 'Cleaning Pet Type',
            'work_times' => 'Work Times',
            'workingdays_perweek' => 'Workingdays Perweek',
            'cleaning_time_estimate' => 'Cleaning Time Estimate',
            'estimated_date' => 'Estimated Date',
            'cleaning_size' => 'Cleaning Size',
            'beginning_date' => 'Beginning Date',
            'end_date' => 'End Date',
            'beginning_time' => 'Beginning Time',
            'end_time' => 'End Time',
            'worker' => 'Worker',
            'price_range' => 'Price Range',
            'stay_type' => 'Stay Type',
            'sex_type' => 'Sex Type',
            'cure_type' => 'Cure Type',
            'baby_age_type' => 'Baby Age Type',
            'number_family' => 'Number Family',
            'food_type' => 'Food Type',
            'baby_type' => 'Baby Type',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
        ];
    }
}
