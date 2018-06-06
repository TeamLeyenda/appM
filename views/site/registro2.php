<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\participante */
/* @var $form ActiveForm */
?>
<div class="site-registro">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Nombre') ?>
        <?= $form->field($model, 'Apellido') ?>
        <?= $form->field($model, 'Afiliacion') ?>
        <?= $form->field($model, 'Telefono') ?>
        <?= $form->field($model, 'Correo') ?>
   <!--     <?php /*$form->field($model, 'Password')*/ ?>  -->
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-registro -->
