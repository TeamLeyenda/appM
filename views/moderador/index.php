<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ModeradorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
 $this->title = 'Moderadors';
 $this->params['breadcrumbs'][] = $this->title;
?>
<div class="moderador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
   <?= Html::a('Create Moderador', ['create'], ['class' => 'btn btn-success']) ?> 
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_moderador',
            'Nombre',
            'Apellido',
            'Afiliacion',
            'Telefono',
            //'Correo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
