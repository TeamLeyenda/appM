<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Presentador */

$this->title = $model->id_presentador;
$this->params['breadcrumbs'][] = ['label' => 'Presentadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presentador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_presentador], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_presentador], [
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
            'id_presentador',
            'Nombre',
            'Apellido',
            'Afiliacion',
            'Telefono',
            'Correo',
        ],
    ]) ?>

</div>
