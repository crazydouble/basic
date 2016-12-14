<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\grid\EnumColumn;
use backend\models\Menu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div id="content" class="col-md-12">
    <div class="pageheader"> 
        <h2><i class="fa fa-cog"></i> <?= Yii::t('backend', 'Menus') ?> </h2> 
        <div class="breadcrumbs"> 
            <ol class="breadcrumb"> 
                <li>当前位置</li>
                <li>
                    <?= Html::a(Html::encode(Yii::$app->name), Yii::$app->homeUrl) ?>
                </li>
                <li class="active">
                  <?= Yii::t('backend', 'System Management') ?>
                </li>
                <li class="active">
                    <?= Html::a(Yii::t('backend', 'Menus'), ['index']) ?>
                </li>
            </ol>
        </div> 
    </div> 
    <div class="main">
        <div class="row">
          <div class="col-md-12">
            <section class="tile color transparent-black">
              <div class="tile-body color transparent-black rounded-corners">
                <p>
                    <?= Html::a(Yii::t('backend', 'Create Menu'), ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php Pjax::begin(); ?>    
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            'parent',
                            'route',
                            'icon',
                            'priority',
                            // 'created_at',
                            // 'updated_at',
                            [
                                'class' => EnumColumn::className(),
                                'attribute' => 'status',
                                'filter' => Menu::getValues('status'),
                                'enum' => Menu::getValues('status'),
                            ],

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                <?php Pjax::end(); ?>
              </div>
            </section>
          </div>
        </div> 
    </div>
</div>