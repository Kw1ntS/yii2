<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $id_works
 * @property int $id_student
 * @property string|null $id_sotrudnik
 * @property string|null $datez
 * @property string|null $name
 * @property int|null $id_speciаlty
 * @property string|null $status
 * @property string|null $typew
 * @property string|null $ozenka
 * @property string|null $mycheckwork
 * @property string|null $docmycheckwork
 * @property float|null $myoriginalwork
 * @property string|null $intercheckwork
 * @property string|null $docintercheckwork
 * @property float|null $interoriginalwork
 * @property string|null $publicwork
 * @property string|null $filework
 * @property string|null $statuswork
 * @property int $id_podpis
 * @property string|null $annotaciy
 * @property string|null $zadanie
 * @property string|null $otziv
 * @property string|null $vnedrenie
 * @property string|null $rec
 * @property string|null $titul
 * @property string|null $soderjanie
 * @property string|null $tekst
 * @property string|null $priloj
 * @property string|null $konecvkr
 */
class Works extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'works';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_student', 'id_speciаlty', 'id_podpis'], 'integer'],
            [['datez'], 'safe'],
            [['status', 'typew', 'ozenka', 'mycheckwork', 'intercheckwork', 'publicwork', 'statuswork'], 'string'],
            [['myoriginalwork', 'interoriginalwork'], 'number'],
            [['id_sotrudnik', 'name', 'docmycheckwork', 'docintercheckwork', 'filework', 'annotaciy', 'zadanie', 'otziv', 'vnedrenie', 'rec', 'titul', 'soderjanie', 'tekst', 'priloj', 'konecvkr'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_works' => 'Id Works',
            'id_student' => 'Id Student',
            'id_sotrudnik' => 'Id Sotrudnik',
            'datez' => 'Datez',
            'name' => 'Name',
            'id_speciаlty' => 'Id Speciаlty',
            'status' => 'Status',
            'typew' => 'Typew',
            'ozenka' => 'Ozenka',
            'mycheckwork' => 'Mycheckwork',
            'docmycheckwork' => 'Docmycheckwork',
            'myoriginalwork' => 'Myoriginalwork',
            'intercheckwork' => 'Intercheckwork',
            'docintercheckwork' => 'Docintercheckwork',
            'interoriginalwork' => 'Interoriginalwork',
            'publicwork' => 'Publicwork',
            'filework' => 'Filework',
            'statuswork' => 'Statuswork',
            'id_podpis' => 'Id Podpis',
            'annotaciy' => 'Annotaciy',
            'zadanie' => 'Zadanie',
            'otziv' => 'Otziv',
            'vnedrenie' => 'Vnedrenie',
            'rec' => 'Rec',
            'titul' => 'Titul',
            'soderjanie' => 'Soderjanie',
            'tekst' => 'Tekst',
            'priloj' => 'Priloj',
            'konecvkr' => 'Konecvkr',
        ];
    }
}
