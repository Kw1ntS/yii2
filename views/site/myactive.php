    <?php

      /** @var yii\web\View $this */

      //use yii\helpers\Html;
      use yii\bootstrap5\ActiveForm;
	  use yii\bootstrap5\Breadcrumbs;
	  use yii\bootstrap5\LinkPager;
	  use yii\bootstrap5\Html;

	  $this->title = 'Search';
	  $this->params['breadcrumbs'][] = $this->title;
    ?>

  	<div class="site-about">      
		<?php $form = ActiveForm::begin(['method'=> 'get'])?>
		<label for="inputName" class="form-label">Название диплома</label>
		<?=Html::textInput('namediplom',$this->params['namediplom']==''?'': $this->params['namediplom'],['placeholder' => 'Введите название диплома', 'size' => 25, 'class' => "form-control",'type'=>"text"])?>
		<label for="inputAuthor" class="form-label">Имя автора</label>
		<?=Html::textInput('curatordiplom',$this->params['curatordiplom']==''?'': $this->params['curatordiplom'],['placeholder' => 'Введите автора диплома', 'size' => 25,'class' => "form-control",'type'=>"text"])?>
		<label for="inputDate" class="form-label">Дата</label>
		<?=Html::textInput('datediplom',$this->params['datediplom']==''?'': $this->params['datediplom'],['placeholder' => 'Введите дату диплома', 'size' => 25,'class' => "form-control",'type'=>"date"])?>
		<br>
		<?=
		Html::submitButton('Отправить', ['class' => 'btn btn-outline-danger'])
		?>
		
		<?php ActiveForm::end()?>  
    </div>
	
	<head>
	<link rel="stylesheet" href="C:\OSPanel\domains\yii2\web\css\pagination.css">
        <style>

        </style>
    </head>
	<body><br>				
	<div class="position-relative">
				<?php 
					foreach($models as $works):						
				?>     

                <div style="display: inline-block;" class="col-lg-2; w-50 p-3;">
                   	<center><div  class="p-3 mb-2 bg-dark text-dark bg-opacity-10">
						<strong><p class="fs-3"><?= $works->name; ?></p></strong>
						<p class="fs-4"><?= $works->id_specialty; ?></p>
						<p class="fs-5">Оценка: <?= $works->ozenka; ?></p>
						<p><?= "$works->typew" ?></p>
						<p>Руководитель: <?= $works->id_sotrudnik;?></p>                    
						<p>Студент: <?= $works->id_student;?></p>
						<p>№: <?= $works->id_works; ?></p>
						<p><?= $works->datez; ?></p>
					</div>
                    	<p><a class="btn btn-outline-secondary" href="/web/site/contact">Подробнее</a></p></center>
					</div> 

				<?php 
					endforeach; 
				?>
	</div>

		<div class="pagination">
			<?php 
				echo LinkPager::widget([
					'pagination' => $pages
				]); 
			?>
		</div>
 	</body>
