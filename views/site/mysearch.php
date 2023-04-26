    <?php

      /** @var yii\web\View $this */

      use yii\helpers\Html;
      use yii\widgets\ActiveForm;

      $this->params['breadcrumbs'][] = $this->title;
    ?>

  <div class="site-about">
        
    <?php $form = ActiveForm::begin() ?>
    <?=
      Html::textInput('namediplom','',['placeholder' => 'Введите название диплома', 'size' => 25]),
      Html::textInput('authordiplom','',['placeholder' => 'Введите автора диплома', 'size' => 25]),
      Html::textInput('datediplom','',['placeholder' => 'Введите дату диплома', 'size' => 25])
    ?><br>
    <?=Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
      
    <?php ActiveForm::end()?>  

  </div>
