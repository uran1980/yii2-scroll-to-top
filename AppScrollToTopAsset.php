<?php

namespace uran1980\yii\widgets\scrollToTop;

class AppScrollToTopAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@uran1980/yii/widgets/scrollToTop/assets';
    public $css = [
        'css/app-scroll-to-top.css',
    ];
    public $js = [
        'js/app-scroll-to-top.js',
    ];
    public $depends = [
        'uran1980\yii\widgets\scrollToTop\ScrollToTopAsset',
    ];
}
