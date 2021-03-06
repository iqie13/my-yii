<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\People */

$this->title = 'Update People: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Peoples', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->people_id, 'url' => ['view', 'id' => $model->people_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="people-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
