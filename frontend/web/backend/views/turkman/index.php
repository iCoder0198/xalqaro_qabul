<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\query\TurkmanProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Turkman Profiles');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="turkman-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Turkman Profile'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
            'patronymic',
            'state_id',
            //'province_id',
            //'region_id',
            //'address:ntext',
            //'phone_1',
            //'phone_2',
            //'date_birth',
            //'email:email',
            //'gender_id',
            //'image:ntext',
            //'status:boolean',
            //'created_at',
            //'updated_at',
            //'diplom',
            //'vaqtinchalik_pasport',
            //'year_of_graduation',
            //'medsertifikat',
            //'pass_seria',
            //'pass_num',
            //'pass_file',
            //'section_id',
            //'ariza',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TurkmanProfile $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
