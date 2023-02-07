<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'know_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'know_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_t')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
