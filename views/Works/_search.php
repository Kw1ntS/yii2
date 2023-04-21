<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\WorksSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="works-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_works') ?>

    <?= $form->field($model, 'id_student') ?>

    <?= $form->field($model, 'id_sotrudnik') ?>

    <?= $form->field($model, 'datez') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'id_speciаlty') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'typew') ?>

    <?php // echo $form->field($model, 'ozenka') ?>

    <?php // echo $form->field($model, 'mycheckwork') ?>

    <?php // echo $form->field($model, 'docmycheckwork') ?>

    <?php // echo $form->field($model, 'myoriginalwork') ?>

    <?php // echo $form->field($model, 'intercheckwork') ?>

    <?php // echo $form->field($model, 'docintercheckwork') ?>

    <?php // echo $form->field($model, 'interoriginalwork') ?>

    <?php // echo $form->field($model, 'publicwork') ?>

    <?php // echo $form->field($model, 'filework') ?>

    <?php // echo $form->field($model, 'statuswork') ?>

    <?php // echo $form->field($model, 'id_podpis') ?>

    <?php // echo $form->field($model, 'annotaciy') ?>

    <?php // echo $form->field($model, 'zadanie') ?>

    <?php // echo $form->field($model, 'otziv') ?>

    <?php // echo $form->field($model, 'vnedrenie') ?>

    <?php // echo $form->field($model, 'rec') ?>

    <?php // echo $form->field($model, 'titul') ?>

    <?php // echo $form->field($model, 'soderjanie') ?>

    <?php // echo $form->field($model, 'tekst') ?>

    <?php // echo $form->field($model, 'priloj') ?>

    <?php // echo $form->field($model, 'konecvkr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
