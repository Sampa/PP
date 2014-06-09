<?php
use yii\helpers\Html;
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
</head>
<body>
<?php $this->beginBody() ?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Hexa a portfolio bootstrap Website Template | Home :: w3layouts</title>
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
<body class="metro">
<div class="header_bg" id="home"><!-- start header -->
    <div class="container">
        <div class="row header text-center specials">

            <nav class="top-nav horizontal-menu">
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
                        <a class="menu-link" href="blog.html">blog</a>
                    </li>
                    <li class="logo menu-link page-scroll">
                        <a title="hexa" href="index.html#about">
                            <img src="images/userlogo.png" alt="" class="responsive"/>
                        </a>
                    </li>
<!--                    <li class="page-scroll"><a href="#about">About</a></li>-->
                    <li class="menu-link" ><a href="portfolio.html">portfolio</a></li>
                    <li class="menu-link page-scroll"><a href="#contact">contact</a></li>
                </ul>
                <a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
            </nav>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer id="contact" class="footer_bg container sideBorders ">
    <div class="panel" data-role="panel">
        <div class="panel-header">
            <span class="headerText" style="color:#57E0C4;">Contact me</span>
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
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script type="text/javascript">
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
<!---- start-smoth-scrolling---->
<style>
    /*
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
*/
    .nav-row {
        text-align: center;
    }
    .nav-row p {
        padding: 5px;
    }
    .nav-row .col-md-2 {
        background-color: #fff;
        border: 1px solid #e0e1db;
        border-right: none;
    }
    .nav-row .col-md-2:last-child {
        border: 1px solid #e0e1db;
    }
    .nav-row .col-md-2:first-child {
        border-radius: 5px 0 0 5px;
    }
    .nav-row .col-md-2:last-child {
        border-radius: 0 5px 5px 0;
    }
    .nav-row .col-md-2:hover {
        color: #e92d00;
        cursor: pointer;
    }
    .nav-row .active {
        color: #e92d00;
        margin-top: -6px;
        border-top: 6px solid #e92d00;
        border-bottom: 6px solid #e92d00;
    }
    .nav-row .active:before {
        content: '';
        position: absolute;
        border-style: solid;
        border-width: 6px 6px 0;
        border-color: #e92d00 transparent;
        display: block;
        width: 0;
        z-index: 1;
        margin-left: -6px;
        top: 0;
        left: 50%;
    }
    .nav-row .glyphicon {
        padding-top: 15px;
        font-size: 40px;
    }

</style>