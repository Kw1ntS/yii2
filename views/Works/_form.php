<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Works $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="works-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_student')->textInput() ?>

    <?= $form->field($model, 'id_sotrudnik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datez')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_speciаlty')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Y' => 'Y', 'Управление' => 'Управление', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'typew')->dropDownList([ 'Диплом' => 'Диплом', 'Диссертация' => 'Диссертация', 'Публикация' => 'Публикация', 'Монография' => 'Монография', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ozenka')->dropDownList([ 'Не оценивается' => 'Не оценивается', 'Удовлетворительно' => 'Удовлетворительно', 'Хорошо' => 'Хорошо', 'Отлично' => 'Отлично', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mycheckwork')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'docmycheckwork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'myoriginalwork')->textInput() ?>

    <?= $form->field($model, 'intercheckwork')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'docintercheckwork')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interoriginalwork')->textInput() ?>

    <?= $form->field($model, 'publicwork')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'filework')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statuswork')->dropDownList([ 'autocheck' => 'Autocheck', 'directcheck' => 'Directcheck', 'nocheck' => 'Nocheck', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'id_podpis')->textInput() ?>

    <?= $form->field($model, 'annotaciy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zadanie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otziv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vnedrenie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soderjanie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tekst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priloj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'konecvkr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
