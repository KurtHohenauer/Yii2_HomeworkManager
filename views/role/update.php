<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Role $model */

$this->title = Yii::t('app', 'Update Role: {name}', [
    'name' => $model->role_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->role_id, 'url' => ['view', 'role_id' => $model->role_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="role-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
