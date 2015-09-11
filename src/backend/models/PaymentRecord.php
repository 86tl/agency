<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_record".
 *
 * @property integer $id
 * @property integer $agency_id
 * @property integer $user_id
 * @property integer $employee_id
 * @property integer $job_id
 * @property string $alipay_id
 * @property string $payment_method
 * @property string $payment_record
 * @property integer $account_number
 * @property string $bank_name
 * @property string $curreny
 * @property integer $amount
 * @property string $remarks
 * @property string $create_time
 */
class PaymentRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment_record';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agency_id', 'user_id', 'employee_id', 'job_id', 'account_number', 'amount'], 'integer'],
            [['create_time'], 'safe'],
            [['alipay_id', 'payment_method', 'payment_record'], 'string', 'max' => 30],
            [['bank_name'], 'string', 'max' => 50],
            [['curreny'], 'string', 'max' => 20],
            [['remarks'], 'string', 'max' => 200]
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
            'user_id' => 'User ID',
            'employee_id' => 'Employee ID',
            'job_id' => 'Job ID',
            'alipay_id' => 'Alipay ID',
            'payment_method' => 'Payment Method',
            'payment_record' => 'Payment Record',
            'account_number' => 'Account Number',
            'bank_name' => 'Bank Name',
            'curreny' => 'Curreny',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'create_time' => 'Create Time',
        ];
    }
}
