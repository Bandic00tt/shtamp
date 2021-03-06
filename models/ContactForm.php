<?php

namespace app\models;

use Yii;
use himiklab\yii2\recaptcha\ReCaptchaValidator;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends \yii\db\ActiveRecord
{
    public $reCaptcha;

    public static function tableName()
    {
        return 'feedbacks';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'message'], 'required', 'message' => 'Поле обязательно для заполнения'],
            // email has to be a valid email address
            ['email', 'email'],
            ['date', 'safe'],
            // verifyCode needs to be entered correctly
            [['reCaptcha'], ReCaptchaValidator::className(), 'secret' => Yii::$app->params['secretKey'], 'uncheckedMessage' => 'Пожалуйста, пройдите проверку'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'subject' => 'Тема',
            'message' => 'Сообщение',
            'date' => 'Дата',
            'reCaptcha' => 'Проверка',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->date = date("Y-m-d H:i:s");
            return true;
        }
        return false;
    }
}
