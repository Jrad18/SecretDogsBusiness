<?php
$selected = 0;
?>

<div class="nav-top">
    <div class="hamburger">
        <div class="line" id="line1"></div>
        <div class="line" id="line2"></div>
        <div class="line" id="line3"></div>
    </div>
</div>

<div class="nav-mobile">
    <div class="nav-button-mobile" style="margin-top: 60px;"></div>
    <a class="nav-button-mobile <?= $selected==1?"selected":""?>" href="#">
        <div class="nav-item"> Home</div>
    </a>
    <a class="nav-button-mobile <?= $selected==2?"selected":""?>" href="#">
        <div class="nav-item"> Link 2</div>
    </a>
    <a class="nav-button-mobile <?= $selected==3?"selected":""?>" href="#">
        <div class="nav-item"> Item</div>
    </a>
    <a class="nav-button-mobile <?= $selected==4?"selected":""?>" href="#">
        <div class="nav-item"> Long Item Name </div>
    </a>
    <a class="nav-button-mobile <?= $selected==5?"selected":""?>" href="#">
        <div class="nav-item"> Contact us </div>
    </a>
</div>

<script>
    $('.hamburger').on('click', function(){
        $(this).toggleClass('active');
        $('.nav-mobile').toggleClass('active');
        $('.line').toggleClass('active');
        $('.main').toggleClass('active');
        $('.nav-top').toggleClass('active');
    });
</script>