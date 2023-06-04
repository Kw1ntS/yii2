<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $id_works
 * @property int $id_student
 * @property string $id_sotrudnik
 * @property string $id_speciаlty
 * @property string $id_podpis
 * @property string $datez
 * @property string $name
 * @property string $status
 * @property string $typew
 * @property string $ozenka
 * @property string $mycheckwork
 * @property string $docmycheckwork
 * @property float $myoriginalwork
 * @property string $intercheckwork
 * @property string $docintercheckwork
 * @property float $interoriginalwork
 * @property string $publicwork
 * @property string $filework
 * @property string $statuswork
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
            [['id_student', 'id_sotrudnik', 'id_speciаlty', 'id_podpis', 'datez', 'name', 'status', 'typew', 'ozenka', 'mycheckwork', 'docmycheckwork', 'myoriginalwork', 'intercheckwork', 'docintercheckwork', 'interoriginalwork', 'publicwork', 'filework', 'statuswork'], 'required'],
            [['id_student'], 'integer'],
            [['myoriginalwork', 'interoriginalwork'], 'number'],
            [['id_sotrudnik', 'id_speciаlty', 'id_podpis', 'datez', 'name', 'status', 'typew', 'ozenka', 'mycheckwork', 'docmycheckwork', 'intercheckwork', 'docintercheckwork', 'publicwork', 'filework', 'statuswork'], 'string', 'max' => 256],
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
            'id_speciаlty' => 'Id Speciаlty',
            'id_podpis' => 'Id Podpis',
            'datez' => 'Datez',
            'name' => 'Name',
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
        ];
    }
}
