<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\PostSearch $searchModel
 */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

   

    <?php
    // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
        'modelClass' => 'Post',
        ]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="blog"><!-- start main -->
        <div class="main row" style="padding: 0px;">
            <div class="col-md-8 blog_left">
                <h2 class="style">our recent blogs</h2>
                <div class="blog_main">
               
                    <?= ListView::widget([
                    'layout' => "{items}\n{pager}\n{summary}",
                    'dataProvider' => $dataProvider,
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => function ($model, $key, $index, $widget) {
                        return Yii\base\View::render("_view",array("model"=>$model));
                    },
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>