<?php

namespace uran1980\yii\widgets\scrollToTop;

class ScrollToTopAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/scroll-to-top';
    public $js = [
        'jquery.scrollToTop.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
