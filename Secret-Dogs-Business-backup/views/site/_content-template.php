<?php
use app\models\Page;
?>

<div class="content">
    <div class="title">
        <?=$page->title?>
    </div>
    <div class="sub-title">
        <?=$page->subtitle?$page-subtitle:""?>
    </div>
    <div class="half-display">
        <div class="content-text">
            <?=$page->content?>
        </div>
        <div class="content-image">
            <img src="<?=Yii::$app->params['HttpStaticPath']?>/images/MooseBirthday.jpg" style="height:fit-content"/>
        </div>
    </div>
</div>
