<?php
/** @var $model \common\models\Video
 * @Html \common\helpers\Html
 */
?>

<div class="card m-3" style="width: 14rem;">
    <a href="<?php echo \yii\helpers\Url::to(['/video/view', 'id' => $model->video_id]) ?>">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"
                   src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   allowfullscreen
            ></video>
        </div>
    </a>

    <div class="card-body p-2">
        <h6 class="card-title m-0"><?php echo $model->title ?></h6>
        <p class="text-muted card-text m-0">
            <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
        </p>
        <p class="text-muted card-text m-0">
            <?php echo $model->getViews()->count() ?> views .
            <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
        </p>
    </div>
</div>

