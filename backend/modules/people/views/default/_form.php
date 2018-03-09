<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\People */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'id' => 'form-people',
        'options' => [
            'class' => 'form-horizontal',
            'enctype' => 'multipart/form-data'
        ],
    ]); ?>

    <?= $form->field($model, 'people_name', [
        'options'=>[
                'tag'=>'div',
                'class'=>'form-group'
        ],
        'template' => '{label}<div class="col-md-10">{input}</div>{hint}{error}',
        'labelOptions' => [ 'class' => 'col-md-2' ]
            ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'job_title_id', [
        'options'=>[
                'tag'=>'div',
                'class'=>'form-group'
        ],
        'template' => '{label}<div class="col-md-10">{input}</div>{hint}{error}',
        'labelOptions' => [ 'class' => 'col-md-2' ]
            ])->dropDownList($jobTitle, [
        'prompt' => '--Select--'
    ]) ?>

    <?= $form->field($model, 'email', [
        'options'=>[
                'tag'=>'div',
                'class'=>'form-group'
        ],
        'template' => '{label}<div class="col-md-10">{input}</div>{hint}{error}',
        'labelOptions' => [ 'class' => 'col-md-2' ]
            ])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'join_date', [
        'options'=>[
                'tag'=>'div',
                'class'=>'form-group'
        ],
        'template' => '{label}<div class="col-md-10">{input}</div>{hint}{error}',
        'labelOptions' => [ 'class' => 'col-md-2' ]
            ])->textInput() ?>
    
    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">User Account</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $form->field($user, 'username', [
                        'options'=>[
                                'tag'=>'div',
                                'class'=>'form-group'
                        ],
                        'template' => '{label}<div class="col-md-10">{input}</div>{hint}{error}',
                        'labelOptions' => [ 'class' => 'col-md-2' ]
                            ])->textInput() ?>
                    <?= $form->field($user, 'photo', [
                        'options'=>[
                                'tag'=>'div',
                                'class'=>'form-group'
                        ],
                        'template' => '{label}<div class="col-md-10">{input}</div>{hint}{error}',
                        'labelOptions' => [ 'class' => 'col-md-2' ]
                            ])->fileInput() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
