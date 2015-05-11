<?php

namespace backend\controllers;

use Yii;
use backend\models\MEmpleados;
use backend\models\MEmpleadosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use common\models\AccessHelpers;

/**
 * MEmpleadosController implements the CRUD actions for MEmpleados model.
 */
class MEmpleadosController extends Controller
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
     * Lists all MEmpleados models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MEmpleadosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MEmpleados model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MEmpleados model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MEmpleados();

        if ($model->load(Yii::$app->request->post())) 
        {
            //para guardar la imagen
            $imageName=$model->id;
            $model->file = UploadedFile::getInstance($model,'file');

            $model->file->saveAs('uploads/'.$imageName.'.'.$model->file->extension );

            //para guardar la imagen en la db
            $model->url_foto = 'uploads/'.$imageName.'.'.$model->file->extension ;
            
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        
        }  else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing MEmpleados model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ced_empleado]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing MEmpleados model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MEmpleados model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return MEmpleados the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MEmpleados::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
        public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
                return false;
        }

        $operacion = str_replace("/", "-", Yii::$app->controller->route);

        if (!AccessHelpers::getAcceso($operacion)) {
            echo $this->render('/site/nopermitido');
            return false;
            }

        return true;
    }

}
