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

			<div class="col-md-6">
		<?php //=Yii\base\View::render("_view",array("model"=>$model));?>
				<p class="para">
					<?=Html::encode($model->content);?>
				</p>
			</div>
			<div class="col-md-5" style="margin-top: -30px;">
				<div class="blog_right">
					<!-- här ska vi loopa ut tags-->
					<div class="col-md-8">
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
					<div class="col-md-4">
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
					<div class="blog_list pull-left">
						<ul class="list-unstyled">
							<li>
								<i class="fa fa-calendar-o"></i>
								<span><?php echo date('H:i  j/m-Y   ',$model->create_time); ?></span>
							</li>
							<li>
								<a href="#comments-10">
									<i class="fa fa-comment"></i>
									<span>Comments</span>
								</a>
							</li>
							<li>
								<i class="fa fa-user"></i>
								<span><?= $model->author_id;?></span>
							</li>
							<li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>
							<li>
								<a href=""><i class="fa fa-heart"></i><span> 28</span></a>
							</li>
						</ul>
						<div id="comentsid">
							<li>
								<a href="#">
									<i class="fa fa-coment" ></i>
									<span>Coments</span>
							</li>
						</div>
					</div>
<!--					<h4>-->
<!--						<span>Skapad: --><?php //echo date('H:i  j/m-Y   ',$model->create_time); ?><!--</span>-->
<!--						<span>Senast uppdaterad: --><?php //echo date(' H:i j/m-Y  ',$model->update_time);?><!--</span>-->
<!--					</h4>-->
				</div>
			</div>
		</div>
	</div><!-- end main -->
	<?php
		if($model->author_id == Yii::$app->user->id){
			echo Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'button info large']);
			echo Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
				'class' => 'button danger large',
				'data' => [
					'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
					'method' => 'post',
				],
			]);
		}
	?>
		<!-- DISQUS KOMMENTAR VARIANT BÖRJAR -->
	<div id="comments" class="col-xs-offset-1 col-xs-11 col-sm-6 col-md-4">
		<h1 class="title">
			Comments
			<button type="button" class="close" aria-hidden="true">×</button>
		</h1>
		<div id="disqus_thread"></div>
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'bootsnipp'; // required: replace example with your forum shortname
			var disqus_identifier = '4l0k2';
			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	</div>
	<!-- SLUT DISQUS KOMMENTARER -->


	<div class="container12345" style="display:none" id="kommentarer">
		<div class="row">
			<div class="panel panel-info widget">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-comment"></span>
					<h3 class="panel-title">
						Coments</h3>
					<span class="label label-info">
						78</span>
				</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="row">
								<div class="col-xs-2 col-md-1">
									<img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
								<div class="col-xs-10 col-md-11">
									<div>
										<a href="http://www.jquery2dotnet.com/2013/10/google-style-login-page-desing-usign.html">
											Är jag breakad igen...</a>
										<div class="mic-info">
											By: <a href="#">sökfunktionen</a> on 2 Aug 2013
										</div>
									</div>
									<div class="comment-text">
										pls fix me
									</div>
									<div class="action">
										<button type="button" class="btn btn-primary btn-xs" title="Edit">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
										<button type="button" class="btn btn-success btn-xs" title="Approved">
											<span class="glyphicon glyphicon-ok"></span>
										</button>
										<button type="button" class="btn btn-danger btn-xs" title="Delete">
											<span class="glyphicon glyphicon-trash"></span>
										</button>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="row">
								<div class="col-xs-2 col-md-1">
									<img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
								<div class="col-xs-10 col-md-11">
									<div>
										<a href="http://bootsnipp.com/BhaumikPatel/snippets/Obgj">Such pretty</a>
										<div class="mic-info">
											By: <a href="#">Derpina</a> on 11 Nov 2013
										</div>
									</div>
									<div class="comment-text">
										very better than disqus! so much design! wow! 
									</div>
									<div class="action">
										<button type="button" class="btn btn-primary btn-xs" title="Edit">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
										<button type="button" class="btn btn-success btn-xs" title="Approved">
											<span class="glyphicon glyphicon-ok"></span>
										</button>
										<button type="button" class="btn btn-danger btn-xs" title="Delete">
											<span class="glyphicon glyphicon-trash"></span>
										</button>
									</div>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="row">
								<div class="col-xs-2 col-md-1">
									<img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
								<div class="col-xs-10 col-md-11">
									<div>
										<a href="http://bootsnipp.com/BhaumikPatel/snippets/4ldn">Men seriöööst</a>
										<div class="mic-info">
											By: <a href="#">Daniel</a> on 11 Nov 2013
										</div>
									</div>
									<div class="comment-text">
										Coments? come on!
									</div>
									<div class="action">
										<button type="button" class="btn btn-primary btn-xs" title="Edit">
											<span class="glyphicon glyphicon-pencil"></span>
										</button>
										<button type="button" class="btn btn-success btn-xs" title="Approved">
											<span class="glyphicon glyphicon-ok"></span>
										</button>
										<button type="button" class="btn btn-danger btn-xs" title="Delete">
											<span class="glyphicon glyphicon-trash"></span>
										</button>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<a href="#" class="btn btn-primary btn-sm btn-block" role="button"><span class="glyphicon glyphicon-refresh"></span> More</a>
				</div>
			</div>
		</div>
	</div>
	<!--- Sofies kommentarer slutar -->
</div>

<!--- kommentars script -->
<script type="text/javascript">
	$("#comentsid").on("click",function(){
		$('#kommentarer').fadeToggle();
	});
</script>
