<?php

namespace app\controllers;

use Yii;
use app\models\Cargue;
use app\models\CargueSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\rest\ActiveController;

/**
 * CargueController implements the CRUD actions for Cargue model.
 */
class CargueController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cargue models.
     * @return mixed
     */
    

 



public function actionIndex()
{}

public function actionConteo($id){
    $searchModel = new CargueSearch;
    $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams(), $id);

    if (Yii::$app->request->post('hasEditable')) {
        $bookId = Yii::$app->request->post('editableKey');
        $model = Cargue::findOne($bookId);
 
        $out = Json::encode(['output'=>'', 'message'=>'']);
 
        $post = [];
        $posted = current($_POST['Cargue']);
        $post['Cargue'] = $posted;
 
        if ($model->load($post)) {
            $model->save();
            //$output = '<b>'.$model->posicion_ide_pos.'</b> &nbsp;'.$model->posicionIdePos->nom_pos.'';
            $output = '';
            $out = Json::encode(['output'=>$output, 'message'=>'']);
        } 
        echo $out;
        return;
    }

    return $this->render('index', [
        'dataProvider' => $dataProvider,
        'searchModel' => $searchModel,
        'id'=>$id
    ]);

}






    /**
     * Displays a single Cargue model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cargue model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cargue();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ide_car]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cargue model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ide_car]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cargue model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cargue model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cargue the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cargue::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
