<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="category-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput() ?>
    
    <div class="row">
        <div class="col-md-6"><?= $form->field($model, 'price')->textInput() ?></div>
        <div class="col-md-6"><?= $form->field($model, 'amount')->textInput() ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
