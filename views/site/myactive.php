    <?php

      /** @var yii\web\View $this */

      //use yii\helpers\Html;
      use yii\bootstrap5\ActiveForm;
	  use yii\bootstrap5\Breadcrumbs;
	  use yii\bootstrap5\LinkPager;
	  use yii\bootstrap5\Html;

    $this->params['breadcrumbs'][] = $this->title;
    ?>

  	<div class="site-about">      
		<?php $form = ActiveForm::begin(['method'=> 'post'])?>
		<label for="inputName" class="form-label">Название диплома</label>
		<?=Html::textInput('namediplom','',['placeholder' => 'Введите название диплома', 'size' => 25, 'class' => "form-control",'type'=>"text"])?>
		<label for="inputAuthor" class="form-label">Имя автора</label>
		<?=Html::textInput('authordiplom','',['placeholder' => 'Введите автора диплома', 'size' => 25,'class' => "form-control",'type'=>"text"])?>
		<label for="inputDate" class="form-label">Дата</label>
		<?=Html::textInput('datediplom','',['placeholder' => 'Введите дату диплома', 'size' => 25,'class' => "form-control",'type'=>"date"])?>
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
		<table class="table table-striped">
			<thead>
				<tr>
					<th>№</th>
					<th>Name</th>
					<th>Author</th>
					<th>Prepodovatel</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach($models as $work):						
				?>
					<tr>
						<td><?= $work->id_works; ?></td>
						<td><?= $work->name; ?></td>
						<td><?= $work->id_student; ?></td>
						<td><?= $work->id_sotrudnik; ?></td>
						<td><?= $work->datez; ?></td>
					</tr>
				<?php 
					endforeach; 
				?>
			</tbody>
		</table>

		<div class="pagination">
			<?php 
				echo LinkPager::widget([
					'pagination' => $pages
				]); 
			?>
		</div>
 	</body>
