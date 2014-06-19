<?php

	use yii\helpers\Html;
?>
    <a href="single-page.html"><img src="/images/blog_pic1.jpg" alt="" class="blog_img img-responsive"/></a>
        <h4>
        	<a href="single-page.html">
        		<?php echo Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);?>
        	</a>
        </h4>
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
		        <div id="comentsid">
		            <li>
		                <a href="#">
		                    <i class="fa fa-coment" ></i>
		                    <span>Coments</span>

		            </li>
		        </div>
		        <li><i class="fa fa-user"></i><span><?= $model->author_id;?></span></li>
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
<?php
//var_dump ($model->getTblComments()) ;
?>