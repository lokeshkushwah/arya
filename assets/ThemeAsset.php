<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ThemeAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '../css/site.css',
        '../css/prettify.css',
        'theme1/css/animate.css',
        'theme1/css/font-awesome.min.css',
        'theme1/css/icofonts.css',
        'theme1/css/select2.min.css',
        'theme1/css/magnific-popup.css',
        'theme1/css/owl.carousel.min.css',
        'theme1/css/bootstrap.min.css',
        'theme1/css/style.css',
        'theme1/css/responsive.css',
    ];
    public $js = [
        //   'theme1/js/jquery.js',
        'theme1/js/popper.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        '../js/jquery.bootstrap.wizard.js',
        //  'theme1/js/owl.carousel.min.js',
        'theme1/js/waypoint.js',
        'theme1/js/jquery.counterup.js',
        'theme1/js/jquery.magnific-popup.min.js',
        'theme1/js/isotope.pkgd.min.js',
        'theme1/js/smoothscroll.js',
        'theme1/js/select2.min.js',
        'theme1/js/parallax.min.js',
        'theme1/js/countdown.js',
        'theme1/js/wow.min.js',
        'theme1/js/main.js',
        'js/prettify.js',
        'theme1/js/table2excel.js',
        //  'js/custom.js',
        // 'js/custom2.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}