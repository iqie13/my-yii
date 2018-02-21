<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="login-box">
    <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LOG</a>
    </div>
  <!-- /.login-logo -->
    <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username', ['options'=>[
                'tag'=>'div',
                'class'=>'form-group has-feedback'
            ],
            'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>{error}{hint}'
            ])->textInput(['autofocus' => true, 'placeholder'=>'Username']) ?>

            <?= $form->field($model, 'password', ['options'=>[
                'tag'=>'div',
                'class'=>'form-group has-feedback'
            ],
            'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>{error}{hint}'
            ])->passwordInput(['placeholder'=>'Password']) ?>

            <?= $form->field($model, 'reCaptcha',['options'=>[
                    'tag'=>'div',
                    'class'=>'form-group has-feedback'
                ]
            ])->widget(
                \himiklab\yii2\recaptcha\ReCaptcha::className(),
                [
                    'siteKey' => '6LesBhUTAAAAAFeIdXpTB6R42WwZ15Q_JvNlvGo7',
                ]
            ) ?>
            
            <div class="row">
                <div class="col-xs-8">
                    <?= $form->field($model, 'rememberMe', ['options'=>[
                        'tag'=>'div',
                        'class'=>'checkbox icheck'
                    ]])->checkbox() ?>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                    </div>
                </div>
            </div>

        <?php ActiveForm::end(); ?>

        <!-- <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
        </div> -->
    </div>
</div>

