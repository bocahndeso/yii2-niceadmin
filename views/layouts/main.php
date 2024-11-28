<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\assets\NiceadminAsset;

AppAsset::register($this);
NiceadminAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/img/icon.ico')]);
$this->registerLinkTag(['rel' => 'preconnect', 'href' => "https://fonts.gstatic.com"]);
$this->registerLinkTag(['rel' => 'stylesheet', 'href' => "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"]);
$this->registerLinkTag(['rel' => 'stylesheet', 'href' => "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title>Yii2 - NiceAdmin </title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- ======= Header ======= -->
<?= $this->render("header") ?>
<!-- End Header -->
<!-- ======= Sidebar ======= -->
<?= $this->render("sidebar-menu") ?>
<!-- End Sidebar-->
<!-- ======= Main Content ======= -->
<?= $this->render("content",['content'=>$content]) ?>
<!-- End Main Content-->
<!-- ======= Footer ======= -->
<?= $this->render("footer") ?>
<!-- End Footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
