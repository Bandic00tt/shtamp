<?php
/* @var $this yii\web\View */
/* @var $model app\models\Pages */
/* @var $form yii\widgets\ActiveForm */
/* @var $image mixed */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="pages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="row">
        <div class="col-md-6">
            <?php
            if ( !$model->isNewRecord ) {
                echo Html::a('Загрузить изображение', '#', [
                    'class' => 'btn btn-success upload-image-to-page',
                    'data-toggle' => 'modal',
                    'data-target' => '#upload-image'
                ]);
            }
            ?>
        </div>
        <div class="col-md-6">
            <?php
                if ( $model->images ) {
                    echo '<strong>Изображения на странице:</strong><br>';
                    echo '<table class="table table-striped">';
                    foreach ( $model->images as $img ) {
            ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?= $img->path ?>
                            </div>
                            <div class="col-md-6">
                                <?= Html::a($img->title, Yii::getAlias('@web') . $img->path, [
                                    'target' => '_blank'
                                ]) ?>
                            </div>
                        </div>
            <?php
                    }
                    echo '</table>';
                }
            ?>
        </div>
    </div>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<?php
    if ( !$model->isNewRecord ) {
?>
        <!-- Modal -->
        <div class="modal fade" id="upload-image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Загрузить изображение</h4>
                    </div>
                    <div class="modal-body">
                        <?php $form = ActiveForm::begin([
                            'action' => 'upload-image',
                            'options' => [
                                'enctype' => 'multipart/form-data'
                            ]
                        ]) ?>
                            <?= $form->field($image, 'title') ?>
                            <?= $form->field($image, 'file')->fileInput() ?>
                            <?= $form->field($image, 'page_id')->hiddenInput(['value' => $model->id])->label(false) ?>
                            <div class="form-group">
                                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
                            </div>
                        <?php ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
?>