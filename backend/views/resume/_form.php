<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Resume */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'resume')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumary_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumary_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumary_l')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sumary_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education_n2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smm_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smm_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smm1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smm2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smm3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional_n')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional_t')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional_l')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professional3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
