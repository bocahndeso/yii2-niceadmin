<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\helpers\FileHelper;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class NiceAdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public function init()
    {
        parent::init();

        $this->css = [
            $this->addVersion('niceadmin/css/style.css'),
            //$this->addVersion('niceadmin/vendor/bootstrap/css/bootstrap.min.css'),
           // $this->addVersion('niceadmin/vendor/bootstrap-icons/bootstrap-icons.css'),
           // $this->addVersion('niceadmin/vendor/boxicons/css/boxicons.min.css'),
           // $this->addVersion('niceadmin/vendor/quill/quill.snow.css'),
           // $this->addVersion('niceadmin/vendor/quill/quill.bubble.css'),
           // $this->addVersion('niceadmin/vendor/remixicon/remixicon.css'),
           // $this->addVersion('niceadmin/vendor/simple-datatables/style.css'),
        ];
        $this->js = [
            $this->addVersion('niceadmin/js/main.js'),
           // $this->addVersion('niceadmin/vendor/apexcharts/apexcharts.min.js'),
            $this->addVersion('niceadmin/vendor/bootstrap/js/bootstrap.bundle.min.js'),
           // $this->addVersion('niceadmin/vendor/chart.js/chart.umd.js'),
           // $this->addVersion('niceadmin/vendor/echarts/echarts.min.js'),
           // $this->addVersion('niceadmin/vendor/quill/quill.js'),
           // $this->addVersion('niceadmin/vendor/simple-datatables/simple-datatables.js'),
           // $this->addVersion('niceadmin/vendor/tinymce/tinymce.min.js'),
           // $this->addVersion('niceadmin/vendor/php-email-form/validate.js'),
        ];
    }

    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset'
    ];

     /**
     * Add version (timestamp) to the file URL.
     *
     * @param string $file
     * @return string
     */
    protected function addVersion($file)
    {
        $filePath = \Yii::getAlias($this->basePath . '/' . $file);
        if (file_exists($filePath)) {
            $timestamp = filemtime($filePath);
            return $file . '?v=' . $timestamp;
        } else {
            return $file;
        }
    }
}
