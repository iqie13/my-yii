<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
    <header class="main-header">
        <?php require_once("header.php"); ?>
    </header>
    <aside class="main-sidebar">
        <?php require_once("navbar.php"); ?>
    </aside>

    <div class="content-wrapper">
        <section class="content-header">
        <h1>
            OldmanCode
            <small>Not too old for code</small>
        </h1>
            <?= Breadcrumbs::widget([
                'homeLink' => [ 
                    'label' => Yii::t('yii', 'Dashboard'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                'options' => ['class' => 'breadcrumb']
            ]) ?>
            <?= Alert::widget() ?>
        </section>
        <section class="content">
            <?= $content ?>
        </section>
    </div>


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
