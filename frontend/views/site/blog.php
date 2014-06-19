<?php
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
	<a class="button primary large" title="Posts" href="<?=Url::toRoute(["/post/index"]);?>">Posts </a>
</div>
<div class="blog"><!-- start main -->
		<div class="main row" style="padding: 0px;">
			<div class="col-md-8 blog_left">
				<h2 class="style">our recent blogs</h2>
				<div class="blog_main">
					<a href="single-page.html"><img src="/images/blog_pic1.jpg" alt="" class="blog_img img-responsive"/></a>
					<h4><a href="single-page.html">Lorem Ipsum is simply dummy text of the printingy </a></h4>
					<div class="blog_list pull-left">
						<ul class="list-unstyled">
							<li><i class="fa fa-calendar-o"></i><span>June 3, 2013</span></li>
							<li>
								<a href="#comments-10">
									<i class="fa fa-comment"></i>
									<span>Comments</span>
								</a>
							</li>
							<div id="comentsid">
								<li>
									<a href="#">
										<i class="fa fa-coment" ></i>
										<span>Coments</span>
									
								</li>	
							</div>
							<li><i class="fa fa-user"></i><span>Admin</span></li>
							<li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>
						</ul>
					</div>
					<div class="b_left pull-right">
						<a href=""><i class="fa fa-heart"></i><span> 28</span></a>
					</div>
					<div class="clearfix"></div>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
					<div class="read_more btm">
						<a href="single-page.html">view more</a>
					</div>
				</div>
<!--- Sofies kommentarer börjar-->
<div class="container12345" style="display:none" id="kommentarer">
	<div class="row">
		<div class="panel panel-default widget">
			<div class="panel-heading">
				<span class="glyphicon glyphicon-comment"></span>
				<h3 class="panel-title">
					Recent Comments</h3>
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
													Google Style Login Page Design Using Bootstrap</a>
													<div class="mic-info">
														By: <a href="#">Bhaumik Patel</a> on 2 Aug 2013
													</div>
												</div>
												<div class="comment-text">
													Awesome design
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
														<a href="http://bootsnipp.com/BhaumikPatel/snippets/Obgj">Admin Panel Quick Shortcuts</a>
														<div class="mic-info">
															By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
														</div>
													</div>
													<div class="comment-text">
														Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
														euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
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
															<a href="http://bootsnipp.com/BhaumikPatel/snippets/4ldn">Cool Sign Up</a>
															<div class="mic-info">
																By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
															</div>
														</div>
														<div class="comment-text">
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
															euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
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
				<div class="blog_main">
					<iframe src="//player.vimeo.com/video/25541923?color=c9161f" width="100%" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<h4><a href="single-page.html">Lorem Ipsum is simply dummy text of the printingy </a></h4>
					<div class="blog_list pull-left">
						<ul class="list-unstyled">
							<li><i class="fa fa-calendar-o"></i><span>June 3, 2013</span></li>
							<li>
								<a href="#comments-10">
									<i class="fa fa-comment"></i>
									<span>Comments</span>
								</a>
							</li>
							<li><i class="fa fa-user"></i><span>Admin</span></li>
							<li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>
						</ul>
					</div>
					<div class="b_left pull-right">
						<a href=""><i class="fa fa-heart"></i><span>357</span></a>
					</div>
					<div class="clearfix"></div>
					<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
					<div class="read_more btm">
						<a href="single-page.html">view more</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 blog_right">
				<ul class="ads_nav list-unstyled">
					<h4>Ads 125 x 125</h4>
					<li><a href="#"><img src="/images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="/images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="/images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="/images/ads_pic.jpg" alt=""> </a></li>
					<div class="clearfix"></div>
				</ul>
				<ul class="tag_nav list-unstyled">
					<h4>tags</h4>
					<li class="active"><a href="#">art</a></li>
					<li><a href="#">awesome</a></li>
					<li><a href="#">classic</a></li>
					<li><a href="#">photo</a></li>
					<li><a href="#">wordpress</a></li>
					<li><a href="#">videos</a></li>
					<li><a href="#">standard</a></li>
					<li><a href="#">gaming</a></li>
					<li><a href="#">photo</a></li>
					<li><a href="#">music</a></li>
					<li><a href="#">data</a></li>
					<div class="clearfix"></div>
				</ul>
				<!-- start social_network_likes -->
				<div class="social_network_likes">
					<ul class="list-unstyled">
						<li><a href="#" class="tweets"><div class="followers"><p><span>2k</span>Followers</p></div><div class="social_network"><i class="twitter-icon"> </i> </div></a></li>
						<li><a href="#" class="facebook-followers"><div class="followers"><p><span>5k</span>Followers</p></div><div class="social_network"><i class="facebook-icon"> </i> </div></a></li>
						<li><a href="#" class="email"><div class="followers"><p><span>7.5k</span>members</p></div><div class="social_network"><i class="email-icon"> </i></div> </a></li>
						<li><a href="#" class="dribble"><div class="followers"><p><span>10k</span>Followers</p></div><div class="social_network"><i class="dribble-icon"> </i></div></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="news_letter">
					<h4>news letter</h4>
					<form>
						<span><input type="text" placeholder="Your email address"></span>
						<span  class="pull-right fa-btn btn-1 btn-1e"><input type="submit" value="subscribe"></span>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div><!-- end main -->
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
<!--- kommentars script -->
<script type="text/javascript">
	$("#comentsid").on("click",function(){
		alert("hej");
		$('#kommentarer').show();
	});
</script>
