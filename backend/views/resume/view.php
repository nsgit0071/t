<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Resume */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="resume-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'resume',
            'name',
            'sumary',
            'sumary_n',
            'sumary_t',
            'sumary_l',
            'sumary_w',
            'education',
            'education_name',
            'education_y',
            'education_n2',
            'education_t',
            'smm',
            'smm_y',
            'smm_t',
            'smm1',
            'smm2',
            'smm3',
            'professional',
            'professional_n',
            'professional_y',
            'professional_t',
            'professional_l',
            'professional1',
            'professional2',
            'professional3',
        ],
    ]) ?>

</div>
