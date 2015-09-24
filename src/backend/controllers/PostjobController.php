<?php

namespace backend\controllers;

use Yii;
use app\models\PostJob;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostjobController implements the CRUD actions for PostJob model.
 */
class PostjobController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
            'class' => AccessControl::className(),
            'rules' => [
            [
            'actions' => [],
            'allow' => true,
            'roles' => ['@'],
            ],
            ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all PostJob models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => PostJob::find()->where($this->handel_search()),
            'pagination' => [
                'pagesize' => Yii::$app->params['page_size'],
            ]
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * @return array
     * handel search conditions
     */
    function handel_search()
    {
        if($_REQUEST['st'])
        {
            ($_REQUEST['service_type'])?$arr['service_type']=$_REQUEST['service_type']:'';
        }
        switch($_REQUEST['st'])
        {
            case 1:
                ($_REQUEST['search_input'])?$arr['name']=$_REQUEST['search_input']:'';
                break;
            case 2:
                ($_REQUEST['search_input'])?$arr['mobile']=$_REQUEST['search_input']:'';
                break;
            default:
        }
        return $arr;
    }

    /**
     * Displays a single PostJob model.
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
     * Creates a new PostJob model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PostJob();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PostJob model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PostJob model.
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
     * Finds the PostJob model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PostJob the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PostJob::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
