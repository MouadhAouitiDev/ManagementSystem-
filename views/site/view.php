<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Management system';
?>
<div class="site-index">
        <h1 style="margin-bottom:30px;">Post Numbre <?php echo $post->ID;?>  </h1>

    <div class="body-content">
		<ul class="list-group">
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			  				 <b> Nom :</b>  <?php echo $post->  title; ?>
				
			  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  
					 <b>Description :</b>  <?php echo $post->  description; ?>

			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			  
			  		 <b>Category :</b>  <?php echo $post->  category; ?>

			  </li>
		</ul>
		<div class="row"> 
						<a href = <?=yii::$app->homeUrl;?> class="btn btn-primary " style="margin-left:15px;">Go Back</a>
		</div>

    </div>
</div>
