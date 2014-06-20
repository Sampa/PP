<?php

	use yii\helpers\Html;
?>
<div id="singlePost">
	<div class="main row" style="padding: 0px;">
        <h2 class="style"><?php echo Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);?></h2>
        <div class="blog_main"></div>
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
			        <span><?= $model->author->username;?></span>
		        </li>
		        <li><a href="#"><i class="fa fa-eye"></i><span>124 views</span></a></li>
		    </ul>
	        
		</div>
		<div class="b_left">
		    <a href=""><i class="fa fa-heart"></i><span> 28</span></a>
		</div>

		<div class="clearfix"></div>
		<p class="para">
			<?= $model->content;?>
		</p>
		<div class="read_more btm">
			<?php echo Html::a("Read more", ['view', 'id' => $model->id]);?>
		</div>
</div>		
<?php
//var_dump ($model->getTblComments()) ;
?>