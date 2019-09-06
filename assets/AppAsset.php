<?php
    namespace lirpo\assets;
    use yii\web\AssetBundle;

    class AppAsset extends AssetBundle
    {
        public $basePath = '@webroot';
        public $baseUrl = '@web';
        public $css = [
            ['css/index.less', 'rel' => 'stylesheet/less'],
            '//use.fontawesome.com/releases/v5.8.1/css/all.css',
        ];
        public $js = [
            // '//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js',
            '/js/index.js',
        ];
        public $depends = [
            // 'rmrevin\yii\fontawesome\AssetBundle',
        ];
    }
