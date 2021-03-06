<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use himiklab\yii2\recaptcha\ReCaptcha;

$this->title = 'Форма обратной связи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
        <h4>Сообщение отправлено!</h4>
    <?php else: ?>

        <div class="row">
            <div class="col-lg-8">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'message')->textArea(['rows' => 6]) ?>

                    <?= $form->field($model, 'reCaptcha')->widget(ReCaptcha::className(), [
                        'siteKey' => Yii::$app->params['siteKey']
                        //'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ])->label(false) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
