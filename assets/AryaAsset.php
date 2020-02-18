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
class AryaAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'arya/css/framework7.css',
        'arya/style.css',
        'arya/css/swipebox.css',
        'arya/css/animations.css',
        'https://fonts.googleapis.com/css?family=Roboto:100,300,400,900'
    ];
    public $js = [
        //   'theme1/js/jquery.js',
        'arya/js/jquery-1.10.1.min.js',
        'arya/js/jquery.validate.min.js',
        'arya/js/framework7.js',
        'arya/js/jquery.swipebox.js',
        'arya/js/jquery.fitvids.js',
        'arya/js/email.js',
        'arya/js/audio.min.js',
        'arya/js/my-app.js'
            //  'js/custom.js',
            // 'js/custom2.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
       // 'yii\bootstrap\BootstrapAsset',
    ];

}
