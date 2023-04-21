<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Works $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="works-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_works' => $model->id_works], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_works' => $model->id_works], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_works',
            'id_student',
            'id_sotrudnik',
            'datez',
            'name',
            'id_speciаlty',
            'status',
            'typew',
            'ozenka',
            'mycheckwork',
            'docmycheckwork',
            'myoriginalwork',
            'intercheckwork',
            'docintercheckwork',
            'interoriginalwork',
            'publicwork',
            'filework',
            'statuswork',
            'id_podpis',
            'annotaciy',
            'zadanie',
            'otziv',
            'vnedrenie',
            'rec',
            'titul',
            'soderjanie',
            'tekst',
            'priloj',
            'konecvkr',
        ],
    ]) ?>

</div>
