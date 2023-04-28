<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Works;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionMyactive($namediplom='',$authordiplom='',$datediplom='')
    {   
        print_r(Yii::$app->request->post());
		if (Yii::$app->request->post()) 
        {
			$data = Yii::$app->request->post()['namediplom'];
            $data1 = Yii::$app->request->post()['authordiplom'];
            $data2 = Yii::$app->request->post()['datediplom'];
			$diplom = Works::find()
        ->where(['LIKE', 'name', $data])
        ->orwhere(['LIKE', 'id_student', $data1])
        ->orwhere(['LIKE', 'datez', $data2])
        ->all();
        return $this->render('myactive',['p3'=>$diplom]);
		}
		return $this->render('mysearch');
    }


     /* public function actionMyactive($namediplom='',$authordiplom='',$datediplom='')
    {
		if (Yii::$app->request->post($namediplom)) 
        {
			$data = Yii::$app->request->post();
			$diplom = Works::find()
            ->where(['LIKE', 'name', $data['namediplom']])
            ->all();
            return $this->render('myactive',['p3'=>$diplom]);
		}

        else
        {
            if (Yii::$app->request->post($authordiplom)) 
            {
                $data = Yii::$app->request->post();
                $diplom = Works::find()
                ->where(['LIKE', 'name', $data['authordiplom']])
                ->all();
                return $this->render('myactive',['p3'=>$diplom]);
            }
            else 
            {
                if (Yii::$app->request->post($datediplom)) 
                {
                    $data = Yii::$app->request->post();
                    $diplom = Works::find()
                    ->where(['LIKE', 'name', $data['datediplom']])
                    ->all();
                    return $this->render('myactive',['p3'=>$diplom]);
                }
                return $this->render('mysearch');
            }
            
        }
    } */

            /* public function actionMyactive()
        {
            $query = Works::find();

            $column1 = Yii::$app->request->get('namediplom');
            $column2 = Yii::$app->request->get('authordiplom');
            $column3 = Yii::$app->request->get('datediplom');

            $query->andFilterWhere(['like', 'name', $column1])
                ->andFilterWhere(['like', 'id_student', $column2])
                ->andFilterWhere(['like', 'datez', $column3]);
            
            $result = $query->all();
            
            return $this->render('search', [
                'result' => $result,
            ]);
        } */
}