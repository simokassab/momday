<?= $header; ?><?= $column_left; ?>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button type="submit" form="form-bookey" data-toggle="tooltip" title="<?= $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="<?= $url_cancel; ?>" data-toggle="tooltip" title="<?= $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
            </div>
            <h1><?= $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                <li><a href="<?= $breadcrumb['href']; ?>"><?= $breadcrumb['text']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <?php if (isset($error_warning)) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?= $error_warning; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <?php if (isset($success) && ! empty($success)) { ?>
        <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?= $success; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-pencil"></i> <?= $label_edit; ?></h3>
            </div>
            <div class="panel-body">
                <form action="<?= $url_action; ?>" method="post" enctype="multipart/form-data" id="form-bookey" class="form-horizontal">
                    <input type="hidden" name="action" value="save">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-settings" data-toggle="tab"><?= $tab_settings; ?></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-settings">

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-status">
                                <span data-toggle="tooltip" title="Use this option to enable or disable Bookey plugin"><?= $label_enabled; ?></span>
                                </label>
                                <div class="col-sm-10">
                                    <select name="bookey_status" id="input-status" class="form-control">
                                        <option value="1" <?php if ($value_enabled == 1) { ?> selected="selected" <?php } ?>><?= $text_enabled; ?></option>
                                        <option value="0" <?php if ($value_enabled == 0) { ?> selected="selected" <?php } ?>><?= $text_disabled; ?></option>
                                    </select>
                                    <?php if (isset($error_enabled)) { ?>
                                    <div class="text-danger"><?= $error_enabled; ?></div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-payment-api-accountID">
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="bookey_payment_api_accountID" id="input-payment-api-accountID" value="<?= $value_payment_api_accountID; ?>" class="form-control" />
                                    <?php if (isset($error_payment_api_accountID)) { ?>
                                    <div class="text-danger"><?= $error_payment_api_accountID; ?></div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-payment-api-privateKey">
                                </label>
                                <div class="col-sm-10">
                                    <input type="password" name="bookey_payment_api_privateKey" id="input-payment-api-privateKey" value="<?= $value_payment_api_privateKey; ?>" class="form-control" />
                                    <?php if (isset($error_payment_api_privateKey)) { ?>
                                    <div class="text-danger"><?= $error_payment_api_privateKey; ?></div>
                                    <?php } ?>
                                </div>
                            </div>

                            


                           

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-redirect-url">
                                </label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-link fa-fw"></i></span>
                                        <input type="url" name="bookey_redirect_url" id="input-redirect-url" value="<?= $value_redirect_url; ?>" class="form-control" />
                                    </div>
                                    <?php if (isset($error_redirect_url)) { ?>
                                    <div class="text-danger"><?= $error_redirect_url; ?></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $footer; ?>
