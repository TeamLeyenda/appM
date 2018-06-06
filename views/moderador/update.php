<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Moderador */

$this->title = 'Update Moderador: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Moderadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_moderador, 'url' => ['view', 'id' => $model->id_moderador]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="moderador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
