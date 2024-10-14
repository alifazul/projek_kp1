<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= (!empty($title) ? $title : 'No Title') ?></title>

    <?= $this->include('template/css') ?>
</head>
<body class="<?= (!empty($body) ? $body : 'hold-transition sidebar-mini layout-navbar-fixed') ?>">
    
    <?= $this->include('') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('_layout/footer') ?>
    <?= $this->include('_layout/js') ?>
</body>
</html>