<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ResumeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resumes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Resume', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'resume',
            'name',
            'sumary',
            'sumary_n',
            //'sumary_t',
            //'sumary_l',
            //'sumary_w',
            //'education',
            //'education_name',
            //'education_y',
            //'education_n2',
            //'education_t',
            //'smm',
            //'smm_y',
            //'smm_t',
            //'smm1',
            //'smm2',
            //'smm3',
            //'professional',
            //'professional_n',
            //'professional_y',
            //'professional_t',
            //'professional_l',
            //'professional1',
            //'professional2',
            //'professional3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
