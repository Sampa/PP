<?php
namespace frontend\controllers;
use yii\helpers\Html;
use yii\web\Controller;
class AppController extends Controller{
	function getImage($filename, $options) {
		$options['src'] = Yii::$app->params['baseUrl'] . '/images/' . $filename;
		return Html::tag('img', '', $options);
	}
}