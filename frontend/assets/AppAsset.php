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
        'css/materialize.css',
        'css/all.css',
        'css/style.css',
        'css/fontawesome.css',
        'css/fontawesome.min.css',
    ];
    public $js = [
        'js/materialize.js',
        'js/site.js',
        'js/init.js',
        'js/my.js',
        'js/fontawesome.js',
        'js/fontawesome.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
