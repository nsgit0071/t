<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\ResumeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resume-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'resume') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'sumary') ?>

    <?= $form->field($model, 'sumary_n') ?>

    <?php // echo $form->field($model, 'sumary_t') ?>

    <?php // echo $form->field($model, 'sumary_l') ?>

    <?php // echo $form->field($model, 'sumary_w') ?>

    <?php // echo $form->field($model, 'education') ?>

    <?php // echo $form->field($model, 'education_name') ?>

    <?php // echo $form->field($model, 'education_y') ?>

    <?php // echo $form->field($model, 'education_n2') ?>

    <?php // echo $form->field($model, 'education_t') ?>

    <?php // echo $form->field($model, 'smm') ?>

    <?php // echo $form->field($model, 'smm_y') ?>

    <?php // echo $form->field($model, 'smm_t') ?>

    <?php // echo $form->field($model, 'smm1') ?>

    <?php // echo $form->field($model, 'smm2') ?>

    <?php // echo $form->field($model, 'smm3') ?>

    <?php // echo $form->field($model, 'professional') ?>

    <?php // echo $form->field($model, 'professional_n') ?>

    <?php // echo $form->field($model, 'professional_y') ?>

    <?php // echo $form->field($model, 'professional_t') ?>

    <?php // echo $form->field($model, 'professional_l') ?>

    <?php // echo $form->field($model, 'professional1') ?>

    <?php // echo $form->field($model, 'professional2') ?>

    <?php // echo $form->field($model, 'professional3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
