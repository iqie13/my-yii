<?php 
use yii\helpers\Url;
use backend\models\Menu;
?>

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?= Url::home() . Yii::$app->session->get('ava_url') . Yii::$app->session->get('ava_name'); ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?= Yii::$app->session->get('fullname'); ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <?php 
      $parent = Menu::find()->where('menu_parent_bit = 1')
      ->orderBy('menu_order asc')
      ->all();
      foreach($parent as $p) {
        $submenu = Menu::find()->where('menu_parent_id = '.$p->menu_id)
        ->orderBy('menu_order asc')
        ->all();
        $conditions = (!empty($p->menu_condition)) ? $p->menu_condition : "NULL";
        $eval = sprintf("return(%s);", $conditions);
        if(eval($eval)) {
          if(count($submenu) > 0) {
    ?>
            <li class='treeview'>
              <a href="<?= Url::to([$sm->menu_url]); ?>">
                <i class="<?= $p->menu_icon; ?>"></i> <span><?= $p->menu_name; ?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
    <?php
              foreach($submenu as $sm) {
                $conditions2 = (!empty($sm->menu_condition)) ? $sm->menu_condition : "NULL";
                $eval2 = sprintf("return(%s);", $conditions2);
                if(eval($eval2)) {
    ?>
                  <li><a href="<?= Url::to([$sm->menu_url]); ?>"><i class="<?= $sm->menu_icon; ?>"></i> <?= $sm->menu_name; ?></a></li>
    <?php
                }
              }
    ?>
              </ul>
            </li>
    <?php
          } else {
    ?>
            <li><a href="<?= Url::to([$p->menu_url]); ?>"><i class="<?= $p->menu_icon; ?>"></i> <?= $p->menu_name; ?></a></li>
    <?php
          }
        }
      }
    ?>
    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
  </ul>
</section>
<!-- /.sidebar -->