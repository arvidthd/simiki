<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use common\widgets\Alert;

use yii\bootstrap\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>SiMiki - Sistem Manajemen Informasi Kids Impact</title>
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>vendor/bootstrap/css/bootstrap.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/vendor.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/theme.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/utility.css">
    <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web/fusion/')?>css/custom.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= Yii::getAlias('@web/fusion/')?>img/favicon_star.ico">

    <?php $this->head() ?>
</head>
<body class="minimal login-page">
<script> var boxtest = localStorage.getItem('boxed'); if (boxtest === 'true') {document.body.className+=' boxed-layout';} </script>
<?php $this->beginBody() ?>
        <?= $content ?>
<?php $this->endBody() ?>
<script type="text/javascript" src="<?= Yii::getAlias('@web/fusion/')?>vendor/plugins/backstretch/jquery.backstretch.min.js"></script>
<!-- jQuery --> 
</body>
</html>

<?php $this->endPage() ?>
