<?php

namespace uran1980\yii\widgets\scrollToTop;

use AppScrollToTopAsset;
use yii\helpers\Html;

class ScrollToTop extends \yii\base\Widget
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $view = $this->getView();
        AppScrollToTopAsset::register($view);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        return Html::a('', null, [
            'class' => 'scroll-to-top-link',
            'style' => 'display: none;',
            'href'  => '#wrapper',
        ]);
    }
}
