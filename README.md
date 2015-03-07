# Yii2 ScrollToTop button widget

Based on **[scrollToTop jQuery plugin](https://github.com/geniuscarrier/scrollToTop)**.

![screen-01](https://cloud.githubusercontent.com/assets/1616795/6542894/d168c710-c510-11e4-899c-ae6ec8cfed6b.png)

## Installation


### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require uran1980/yii2-scroll-to-top "dev-master"
```

or add

```
"uran1980/yii2-scroll-to-top": "dev-master"
```

to the require section of your ```composer.json```


## Usage

To activate this widget on all pages add this line to you project main layout ```...\frontend\views\layouts\main.php``` before Yii ```endBody()``` block:

```php
<?php echo uran1980\yii\widgets\scrollToTop\ScrollToTop::widget(); ?>
```


## Author

[Ivan Yakovlev](https://github.com/uran1980/), e-mail: [uran1980@gmail.com](mailto:uran1980@gmail.com)
