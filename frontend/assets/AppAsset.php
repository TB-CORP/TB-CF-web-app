<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/jquery-ui.min.css',
        'css/ace-responsive-menu.css',
        'css/menu.css',
        'css/fontawesome.css',
        'css/flaticon.css',
        'css/bootstrap-select.min.css',
        'css/animate.css',
        'css/slider.css',
        'css/style.css',
        'css/ud-custom-spacing.css',
        'css/responsive.css'
    ];
    public $js = [
        'js/jquery-3.6.4.min.js',
        'js/jquery-migrate-3.0.0.min.js',
        'js/popper.min.js',
        'js/bootstrap.min.js',
        'js/bootstrap-select.min.js',
        'js/jquery.mmenu.all.js',
        'js/ace-responsive-menu.js',
        'js/jquery-scrolltofixed-min.js',
        'js/wow.min.js',
        'js/owl.js',
        'js/parallax.js',
        'js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
