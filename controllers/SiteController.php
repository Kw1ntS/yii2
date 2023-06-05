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
use yii\data\Pagination;

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

    public function actionMyactive($namediplom = '', $curatordiplom = '', $datediplom = '')
    {
        //if (Yii::$app->request->post()) 
        {
            //$data = Yii::$app->request->post()['namediplom'];
            //$data1 = Yii::$app->request->post()['authordiplom'];
            //$data2 = Yii::$app->request->post()['datediplom'];

            $data = $namediplom;//Yii::$app->request->post()['namediplom'];
            $data1 =$curatordiplom;// Yii::$app->request->post()['authordiplom'];
            $data2 =$datediplom;// Yii::$app->request->post()['datediplom'];
            
            $query = Works::find();
            if (!empty($data)) {
                $query->andWhere(['LIKE', 'name', '%'.$data.'%', false]);
            }
            if (!empty($data1)) {
                $query->andWhere(['LIKE', 'id_sotrudnik', '%'.$data1.'%', false]);
            }
            if (!empty($data2)) {
                $query->andWhere(['LIKE', 'datez', '%'.$data2.'%', false]);
            }
                        
            $pagination = new Pagination
            ([
                'PageSize' => 5,
                'totalCount'=> $query->count(),
            ]);
            
            $models = $query->offset($pagination->offset)->limit($pagination->limit)->all();

            \Yii::$app->getView()->params['namediplom'] = $data;
            \Yii::$app->getView()->params['curatordiplom'] = $data1;
            \Yii::$app->getView()->params['datediplom'] = $data2;
            
            return $this->render('myactive', 
            [
                'pages' => $pagination,
                'models'=> $models,
            ]);
        }
        //return $this->render('mysearch');
    }
}