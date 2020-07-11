<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Management system';
?>
<div class="site-index">
        <h1>Update Post </h1>

    <div class="body-content">
	<?php $form = ActiveForm::begin()?>
	

        <div class="row">
			<div class="form-group">
				<div class="col-lg-6">
				<?= $form ->field($post, 'title');?>
				</div>
			</div>
        </div>
		
		<div class="row">
			<div class="form-group">
				<div class="col-lg-6">
				<?= $form ->field($post, 'description')->textarea(['rows' => '6']);?>
				</div>
			</div>
        </div>
		
		<div class="row">
		<?php $items = ['e-commerce'=>'e-commerce','CMS'=>'CMS','MVC'=>'MVC'] ?>
			<div class="form-group">
				<div class="col-lg-6">
				<?= $form ->field($post, 'category')->dropDownList($items,['prompt' => 'select']);?>
				</div>
			</div>
        </div>
		
		<div class="row">
			<div class="form-group">
					<div class="col-lg-6">
						<div class="col-lg-3">
							<?= Html::submitButton('update post ',['class'=>'btn btn-primary']);?>
						</div>
						<div class="col-lg-3">
							<a href = <?=yii::$app->homeUrl;?> class="btn btn-primary">Go Back To Home page</a>
						</div>
					</div>
			</div>
        </div>
		
		<?php ActiveForm::end() ?>
    </div>
</div>
