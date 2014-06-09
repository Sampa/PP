<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery.fancybox.css',
        'css/style.css',
        'css/site.css',
        'metro/css/metro-bootstrap.css',
        'metro/css/iconFont.css',
        'fonts/css/font-awesome.min.css',
    ];
    public $js = [
        'js/jquery.easing.1.3.js',
        'js/jquery.fancybox-1.2.1.js',
        'js/jquery.wmuSlider.js',
        'metro/js/jquery.widget.min.js',
        'metro/js/metro-dropdown.js',
        'metro/js/metro.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
