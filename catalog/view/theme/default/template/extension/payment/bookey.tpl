<?php if (isset($error_bookey)) : ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> <?= $error_bookey; ?></div>
<?php endif; ?>
<div class="buttons">
    <div class="pull-right">
        <!-- <a class="btn btn-primary" href="<?= $url_redirect; ?>"><?= $button_confirm; ?></a> -->
        <a class="btn btn-primary" href="<?= $url_redirect; ?>"><?= 'BookeyPay'; ?></a>
    </div>
</div>
