<?php

namespace app\controllers;

use Yii;
use app\models\Tareas;
use app\models\TareasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TareasController implements the CRUD actions for Tareas model.
 */
class TareasController extends Controller
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
     * Lists all Tareas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TareasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tareas model.
     * @param integer $idtarea
     * @param integer $tipo_idtipo
     * @param integer $usuario_idusuario
     * @return mixed
     */
    public function actionView($idtarea, $tipo_idtipo, $usuario_idusuario)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtarea, $tipo_idtipo, $usuario_idusuario),
        ]);
    }

    /**
     * Creates a new Tareas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tareas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtarea' => $model->idtarea, 'tipo_idtipo' => $model->tipo_idtipo, 'usuario_idusuario' => $model->usuario_idusuario]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tareas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idtarea
     * @param integer $tipo_idtipo
     * @param integer $usuario_idusuario
     * @return mixed
     */
    public function actionUpdate($idtarea, $tipo_idtipo, $usuario_idusuario)
    {
        $model = $this->findModel($idtarea, $tipo_idtipo, $usuario_idusuario);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtarea' => $model->idtarea, 'tipo_idtipo' => $model->tipo_idtipo, 'usuario_idusuario' => $model->usuario_idusuario]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tareas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idtarea
     * @param integer $tipo_idtipo
     * @param integer $usuario_idusuario
     * @return mixed
     */
    public function actionDelete($idtarea, $tipo_idtipo, $usuario_idusuario)
    {
        $this->findModel($idtarea, $tipo_idtipo, $usuario_idusuario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tareas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idtarea
     * @param integer $tipo_idtipo
     * @param integer $usuario_idusuario
     * @return Tareas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtarea, $tipo_idtipo, $usuario_idusuario)
    {
        if (($model = Tareas::findOne(['idtarea' => $idtarea, 'tipo_idtipo' => $tipo_idtipo, 'usuario_idusuario' => $usuario_idusuario])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
