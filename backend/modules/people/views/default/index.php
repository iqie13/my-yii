<?php 
$this->title = 'People';
// $this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">People List</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
                <div class="People-default-index">
                    <h1><?= $this->context->action->uniqueId ?></h1>
                    <p>
                        This is the view content for action "<?= $this->context->action->id ?>".
                        The action belongs to the controller "<?= get_class($this->context) ?>"
                        in the "<?= $this->context->module->id ?>" module.
                    </p>
                    <p>
                        You may customize this page by editing the following file:<br>
                        <code><?= __FILE__ ?></code>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>