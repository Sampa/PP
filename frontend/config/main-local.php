<?php

$config = [];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
//    $config['modules']['gii'] = 'yii\gii\Module';
    $config['modules']['gii']['class'] = 'yii\gii\Module';
    $config['modules']['gii']['generators'] = [
        'giiant-crud' => ['class' => 'schmunk42\giiant\crud\Generator'],
        'giiant-model' => ['class' => 'schmunk42\giiant\model\Generator'],
    ];
}

return $config;
