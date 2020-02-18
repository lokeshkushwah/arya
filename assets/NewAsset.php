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
class NewAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'aryabhatt/css/font-awesome.min.css',
        'aryabhatt/css/animate.css',
        'aryabhatt/css/slick.css',
        'aryabhatt/css/magnific-popup.css',
        'aryabhatt/css/off-canvas.css',
        'aryabhatt/fonts/flaticon.css',
        'aryabhatt/fonts/fonts2/flaticon.css',
        'aryabhatt/css/rsmenu-main.css',
        'aryabhatt/css/rsmenu-transitions.css',
        'aryabhatt/style.css',
        'aryabhatt/css/responsive.css',
    ];
    public $js = [
        'aryabhatt/js/modernizr-2.8.3.min.js',
        'aryabhatt/js/owl.carousel.min.js',
        'aryabhatt/js/slick.min.js',
        'aryabhatt/js/isotope.pkgd.min.js',
        'aryabhatt/js/imagesloaded.pkgd.min.js',
        'aryabhatt/js/wow.min.js',
        'aryabhatt/js/waypoints.min.js',
        'aryabhatt/js/jquery.counterup.min.js',
        'aryabhatt/js/jquery.magnific-popup.min.js',
        'aryabhatt/js/rsmenu-main.js',
        'aryabhatt/js/plugins.js',
        'aryabhatt/js/main.js',
        'js/jquery.bootstrap.wizard.js',
        'js/prettify.js',
        //   'js/custom.js'
        // 'js/custom2.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}