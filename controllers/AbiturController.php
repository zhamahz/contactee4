<?php

namespace app\controllers;


use Yii;
use app\models\Abitur;
use app\models\AbiturSearch;
use yii\base\BaseObject;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii2mod\query\ArrayQuery;
use yii\db\ActiveQuery;
use yii\data\ActiveDataProvider;
/**
 * AbiturController implements the CRUD actions for Abitur model.
 */
class AbiturController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Abitur models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AbiturSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $q = Yii::$app->user->identity->id;

        $dataProvider=new ActiveDataProvider(['query' => Abitur::find()]);

        if ($q == 13)
        {
            //$dataProvider=new ActiveDataProvider(['query' => User4::find()->where(['not',['id_university' => null]])]);
           // $dataProvider=new ActiveDataProvider(['query' => Abitur::find()->where(['status1' => 1]);
            $dataProvider=new ActiveDataProvider(['query' => Abitur::find()->where(['status1' => '1'])]);
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Abitur model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Abitur model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Abitur();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Abitur model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Abitur model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Abitur model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Abitur the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Abitur::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Displays about page. Отчет
     *
     * @return string
     */
    public function actionIndex1()
    {
//        $q = Abitur::find()
//            ->where(['id_university' => 4 ])
//            ->all();
        $q = Abitur::find()
            ->where('status1' == 1)
            ->groupBy(['id_university'])->all();

        $query = new ArrayQuery();
        $query->from($q);
        $query1 = $query->count();

        return $this->render('index1', [
            'query' => $q,
            'query1' => $query1,
        ]);
    }
    public function actionCount(){
        $leadsCount = Abitur::find()
            ->where('status1' == 1)
            ->groupBy(['id_university'])
            ->count();
    }
    public function actionIndex2()
    {
//        $q = Abitur::find()
//            ->where(['id_university' => 4 ])
//            ->all();
        $q = Abitur::find()
            ->where('status1' == 1)
            ->groupBy(['id_university'])->all();

        $query = new ArrayQuery();
        $query->from($q);
        $query1 = $query->count();

        return $this->render('index2', [
            'query' => $q,
            'query1' => $query1,
        ]);
    }

    /**
     * Lists all Abitur models.
     * @return mixed
     */
    public function actionIndex3()
    {
        $searchModel = new AbiturSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

//        $q = Yii::$app->user->identity->id;
//
//        $dataProvider=new ActiveDataProvider(['query' => Abitur::find()]);
//
//        if ($q == 12)
//        {
//            //$dataProvider=new ActiveDataProvider(['query' => User4::find()->where(['not',['id_university' => null]])]);
//            // $dataProvider=new ActiveDataProvider(['query' => Abitur::find()->where(['status1' => 1]);
//            $dataProvider=new ActiveDataProvider(['query' => Abitur::find()->where(['status1' => '1'])]);
//        }
        return $this->render('index3', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
