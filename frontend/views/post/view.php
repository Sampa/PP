<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var app\models\Post $model
 */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-view">
	<div class="blog"><!-- start main -->
		<h2 class="style">#<?= $model->id." ".Html::encode($model->title);?></h2>
		<div class="details row">
			<div class="col-md-4">
				<img src="/images/det_pic.jpg" alt="" class="img-responsive"/>
			</div>
			<div class="col-md-8" style="margin-top: -30px;">
				<div class="blog_right">
					<!-- här ska vi loopa ut tags-->
					<div class="col-md-6">
						<ul class="tag_nav list-unstyled">
							<h4>tags</h4>
							<li class="active">
								<a href="#">Grupparbete</a>
							</li>
							<li>
								<a href="#">cvp</a>
							</li>
							<li class="active">
								<a href="#">bli bäst</a>
							</li>
							<li>
								<a href="#">teamwork</a>
							</li>
							<div class="clearfix"></div>
						</ul>
					</div>
					<!-- här ska vi loopa ut kategorier-->
					<div class="col-md-6">
						<ul class="tag_nav list-unstyled">
							<h4>Categories</h4>
							<li class="active">
								<a href="#">Plugg</a>
							</li>
							<li>
								<a href="#">Tips & Tricks</a>
							</li>
							<div class="clearfix"></div>
						</ul>
					</div>
					<h4>
						<span>Skapad: <?php echo date('H:i  j/m-Y   ',$model->create_time); ?></span>
						<span>Senast uppdaterad: <?php echo date(' H:i j/m-Y  ',$model->update_time);?></span>
					</h4>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12">
				<p class="para">
					<?=Html::encode($model->content);?>
				</p>
			</div>
		</div>
	</div><!-- end main -->
	<?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'button info large']) ?>
	<?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
		'class' => 'button danger large',
		'data' => [
			'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
			'method' => 'post',
		],
	]) ?>
</div>
