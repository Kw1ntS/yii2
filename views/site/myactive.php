    <?php

      /** @var yii\web\View $this */

      use yii\helpers\Html;
      use yii\widgets\ActiveForm;
	  use yii\widgets\LinkPager; 

      $this->params['breadcrumbs'][] = $this->title;
    ?>

  <div class="site-about">
      
    <?php $form = ActiveForm::begin(['method'=> 'post']) ?>
    <?=
      Html::textInput('namediplom','',['placeholder' => 'Введите название диплома', 'size' => 25]),
      Html::textInput('authordiplom','',['placeholder' => 'Введите автора диплома', 'size' => 25]),
      Html::textInput('datediplom','',['placeholder' => 'Введите дату диплома', 'size' => 25])
    ?>
    <?=Html::submitButton('Отправить', ['class' => 'btn btn-success'])?>
     
    <?php ActiveForm::end()?>  
    </div>
	
	<head>
        <style>
            table 
            {
                border-collapse: collapse;
                width: 100%;
            }

            table th, table td 
            {
                padding: 8px;
                text-align: center;
                border-bottom: 1px solid #ddd;
            }

            table th 
            {
                text-align: center;
                background-color: #f2f2f2;
                color: #000;
            }
        </style>
    </head>
	<body>
		<br>		
			<table>
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
						foreach($model as $work):						
					?>
						<tr>
							<td><?= $work->id_works; ?></td>
							<td><?= $work->name; ?></td>
							<td><?= $work->id_student; ?></td>
							<td><?= $work->id_sotrudnik; ?></td>
							<td><?= $work->datez; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<div class="pagination">			
			<?
				echo LinkPager::widget
						([
							'pagination'=>$page,
							'prevPageLabel' => false,
							'nextPageLabel' => false,

						]);
			?>		
			</div>
  
