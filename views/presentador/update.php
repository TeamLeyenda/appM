<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Presentador */

$this->title = 'Update Presentador: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Presentadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_presentador, 'url' => ['view', 'id' => $model->id_presentador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="presentador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
