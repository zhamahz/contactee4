<?php

namespace app\controllers;

use app\models\StudentRegistration;
use app\models\StudentRegistrationSearch;
use app\models\University;
use Yii;
use yii\base\BaseObject;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $freeAccess = true;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'index', 'contact', 'about'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [

                        'actions' => ['index', 'contact', 'about'],
                        'allow' => true,
                        'roles' => ['@'],

                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
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

    public function actionDownload()
    {
        return $this->render('download');
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

    public function actionStudentsapplication()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('studentsapplication/studentsapplication', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionApplication()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('applicationlist/applicationlist', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionAnalitikavuz()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('applicationlist/analitikavuz', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUniversityreport()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('applicationlist/universityreport', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUniversityexam()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('applicationlist/universityexam', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUniversitynews()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('applicationlist/universitynews', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionProfile()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('studentsapplication/profile', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionMyapplications()
    {
        $dataProvider = new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('studentsapplication/myapplications', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
