<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <title>Hexa a portfolio bootstrap Website Template | Home :: w3layouts</title>
	<script src="/frontend/web/js/jquery.min.js"></script>
	<!-- Bootstrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
    <!-- start plugins -->
    <script>
        $(function() {
            var pull 		= $('#pull');
            menu 		= $('nav ul');
            menuHeight	= menu.height();
            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
</head>
<body>
<?php $this->beginBody() ?>
<body class="metro" id="top" style="margin-top:30px">
<div class="header_bg" id="home"><!-- start header -->
    <div class="container">
        <div class="row header text-center specials">

            <nav class="top-nav horizontal-menu" >
                <ul class="top-nav nav_list">
                    <li class="menu-link">
                        <a class=" dropdown-toggle" href="#">Code</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li class="menu-link">
                                <a class=" dropdown-toggle" href="#">Tips & tricks</a>
                                <ul class="dropdown-menu" data-role="dropdown">
                                    <li><a href="#">Yii</a></li>
                                    <li><a href="#">Javascript</a></li>
                                    <li><a href="#">Php</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Plugins</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </li>
                    <li class="menu-link page-scroll">
                        <a class="" href="<?=Url::toRoute(["/site/blog"]);?>">blog</a>
                    </li>
                    <li class="logo menu-link page-scroll">
                        <a title="Sofie" href="<?=Url::toRoute(["/site/index", "#"=>"about"]);?>">
                            <img src="images/me.jpg" alt="" class="responsive"/>
                        </a>
                    </li>
                    <li class="menu-link page-scroll"><a href="<?=Url::toRoute(["/site/index", "#"=>"about"]);?>">About</a></li>
                    <li class="menu-link" ><a href="<?=Url::toRoute(["/site/portfolio"]);?>">portfolio</a></li>
                    <li class="menu-link page-scroll"><a href="<?php echo Url::toRoute(["/site/contact"]);?>">contact</a></li>
                </ul>
                <a href="#" id="pull"><img src="/images/nav-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="container" style="padding: 0px;">
        <?php
/// echo Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]);
        ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer id="contact" class="footer_bg container sideBorders ">
    <div id="contactPanel" class="panel" data-role="panel">
        <div class="panel-header">
            <span class="headerText" style="color:#57E0C4;">Contact me </span>
        </div>
        <div class="panel-content">
            <div class="row">
                <div class="col-md-8 contact_left">
                    <h4>In order to get in touch use the contact form below:</h4>
	                <form method="post" action="contact-post.html">
                        <input type="text" value="Name (Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                        <input type="text" value="Email (Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                        <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                        <textarea onfocus="if(this.value == 'Your Message here....') this.value='';" onblur="if(this.value == '') this.value='Your Message here....;" >Your Message here....</textarea>
                                <span class="pull-right">
                                    <button class="button large success" type="submit" value="submit us">Submit</button>
                                </span>
                    </form>
                </div>
                <div class="col-md-4  contact_right">
                    <p><span>Lorem Ipsum is simply dummy text: </span> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    <ul class="list-unstyled address">
                        <li><i class="fa fa-map-marker"></i><span>500 Lorem Ipsum Dolor Sit,</span></li>
                        <li><i class="fa fa-phone"></i><span>(00) 222 666 444</span></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<!-- pilen som man kan trycka på för att komma till toppen igen -->
	<a href="#top" id="toTop"><span id="topHover"></span></a>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
