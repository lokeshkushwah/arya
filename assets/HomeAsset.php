<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HomeAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'home/css/bootstrap.css',
        'home/css/style.css',
        'home/css/font-awesome.css',
        '//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700',
        '//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700',
            // 'home/css/owl.carousel.css',
    ];
    public $js = [
        //  '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js',
     //   'home/js/jquery-ui-1.10.4.custom.min.js',
    //    'home/js/jquery.magnific-popup.min.js',
    //    'home/js/owl.carousel.js',
    //    'home/js/bootstrap.js',
        // 'http://maps.google.com/maps/api/js?sensor=true',
        // 'home/js/jquery.ui.map.js',
   //     'home/js/scripts.js',
    //    'home/js/recliner.min.js',
    //    'home/js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
