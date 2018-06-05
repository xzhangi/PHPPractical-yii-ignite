<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;
    $this->title = 'Register Confirmation';
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Thank you for registering your interest. You have entered the following information:</p>
    <ul>
        <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
        <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
        <li><label>Mobile</label>: <?= Html::encode($model->mobile) ?></li>
    </ul>
</div>