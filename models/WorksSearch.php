<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Works;

/**
 * WorksSearch represents the model behind the search form of `app\models\Works`.
 */
class WorksSearch extends Works
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_works', 'id_student', 'id_speciаlty', 'id_podpis'], 'integer'],
            [['id_sotrudnik', 'datez', 'name', 'status', 'typew', 'ozenka', 'mycheckwork', 'docmycheckwork', 'intercheckwork', 'docintercheckwork', 'publicwork', 'filework', 'statuswork', 'annotaciy', 'zadanie', 'otziv', 'vnedrenie', 'rec', 'titul', 'soderjanie', 'tekst', 'priloj', 'konecvkr'], 'safe'],
            [['myoriginalwork', 'interoriginalwork'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Works::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_works' => $this->id_works,
            'id_student' => $this->id_student,
            'datez' => $this->datez,
            'id_speciаlty' => $this->id_speciаlty,
            'myoriginalwork' => $this->myoriginalwork,
            'interoriginalwork' => $this->interoriginalwork,
            'id_podpis' => $this->id_podpis,
        ]);

        $query->andFilterWhere(['like', 'id_sotrudnik', $this->id_sotrudnik])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'typew', $this->typew])
            ->andFilterWhere(['like', 'ozenka', $this->ozenka])
            ->andFilterWhere(['like', 'mycheckwork', $this->mycheckwork])
            ->andFilterWhere(['like', 'docmycheckwork', $this->docmycheckwork])
            ->andFilterWhere(['like', 'intercheckwork', $this->intercheckwork])
            ->andFilterWhere(['like', 'docintercheckwork', $this->docintercheckwork])
            ->andFilterWhere(['like', 'publicwork', $this->publicwork])
            ->andFilterWhere(['like', 'filework', $this->filework])
            ->andFilterWhere(['like', 'statuswork', $this->statuswork])
            ->andFilterWhere(['like', 'annotaciy', $this->annotaciy])
            ->andFilterWhere(['like', 'zadanie', $this->zadanie])
            ->andFilterWhere(['like', 'otziv', $this->otziv])
            ->andFilterWhere(['like', 'vnedrenie', $this->vnedrenie])
            ->andFilterWhere(['like', 'rec', $this->rec])
            ->andFilterWhere(['like', 'titul', $this->titul])
            ->andFilterWhere(['like', 'soderjanie', $this->soderjanie])
            ->andFilterWhere(['like', 'tekst', $this->tekst])
            ->andFilterWhere(['like', 'priloj', $this->priloj])
            ->andFilterWhere(['like', 'konecvkr', $this->konecvkr]);

        return $dataProvider;
    }
}
