<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Teacher $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_lastname')->textInput(['maxlength' => true]) ?>

    <?php if(!$model->isNewRecord) :?>

    <?= $form->field($model, 'teacher_active')->textInput() ?>

    <?php endif ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
