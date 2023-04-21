<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
      
  <?php $form = ActiveForm::begin() ?>
		<?=Html::textInput('namediplom','',['placeholder' => 'Введите название диплома', 'size' => 25])?><br>
		<?=Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    <?php 
     ActiveForm::end() 
    ?>
   

   <?
     $a='';
	 //print_r($p3);
     foreach ($p3 as $pvlue) {
		  $a=$a.$pvlue['id_works'].' '.$pvlue['id_student'].' '.$pvlue['id_sotrudnik'].' '.$pvlue['datez'].' '.$pvlue['name'].'<br>';	
     }
	 echo $a;
	 
	 
   ?>
   
</div>
