<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\People */

$this->title = 'Create People';
$this->params['breadcrumbs'][] = ['label' => 'Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
                'jobTitle' => $jobTitle,
                'user' => $user,
            ]) ?>
        </div>
    </div>
</div>
