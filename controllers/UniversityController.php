<?php

namespace app\controllers;

use app\models\StudentRegistration;
use app\models\User2;
use Yii;
use app\models\University;
use app\models\UniversitySearch;
use yii\base\BaseObject;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UniversityController implements the CRUD actions for University model.
 */
class UniversityController extends Controller
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
     * Lists all University models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UniversitySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('indexmon', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single University model.
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
     * Creates a new University model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new University();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing University model.
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
     * Deletes an existing University model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['indexmon']);
    }

    /**
     * Finds the University model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return University the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = University::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    // МОН раздел списки всех вузов:  view-> university/indexmon
    public function actionIndexmon()
    {
        $dataProvider=new ActiveDataProvider(['query' => University::find()]);
        return $this->render('indexmon',[
            'dataProvider'=>$dataProvider,
        ]);
    }

   //МОН списки приемной комиссии вузов:  view-> user2/indexmoncommitet
    public function actionIndexmoncommitet()
    {
        $dataProvider=new ActiveDataProvider(['query' => User2::find()]);
        return $this->render('user2/indexmoncommitet',[
            'dataProvider'=>$dataProvider,
        ]);
    }

    //МОН списки всех поданных заялений:  view-> student-registration/indexmonlistapplic
    public function actionIndexmonlistapplic()
    {
        $dataProvider=new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('student-registration/indexmonlistapplic',[
            'dataProvider'=>$dataProvider,
        ]);
    }

    //МОН списки отчетов :  view->student-registration/indexmonreport
    // вывод списка университетов сколько принятых и полученных заявок в количестве
    public function actionIndexmonreport()
    {
        $dataProvider=new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('student-registration/indexmonreport',[
            'dataProvider'=>$dataProvider,
        ]);
    }

    //МОН диаграммы :  view->university/diagrammsmon
    public function actionDiagrammsmon()
    {
        return $this->render('diagrammsmon');
    }

    //МИД списки заявлений на визу:   view->student-registration/indexmidvisalist
    public function actionIndexmidvisalist()
    {
        $dataProvider=new ActiveDataProvider(['query' => StudentRegistration::find()]);
        return $this->render('student-registration/indexmidvisalist',[
            'dataProvider'=>$dataProvider,
        ]);
    }

    //MID диаграммы  view->university/diagrammsmid
    public function actionDiagrammsmid()
    {
        return $this->render('diagrammsmid');
    }
}
