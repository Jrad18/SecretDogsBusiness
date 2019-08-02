<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link type="text/css" rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/redmond/jquery-ui.css"
          media="screen"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="mobile" style="display:none;">
    <?= $this->render('../site/_nav-mobile'); ?>
</div>
<div class="main">
    <div id="desktop" style="display:none;">
        <?= $this->render('../site/_nav-desktop'); ?>
    </div>

    <div class="wrap">
        <div class="hero-image"></div>
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<script>
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if(width < 960){
        $('#mobile').show();
    } else {
        $('#desktop').show();
    }
</script>
