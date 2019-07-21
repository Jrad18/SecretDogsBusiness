<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class BackendController extends Controller
{
    public $layout = "backend";
    public $defaultAction = "index";


    public function actionIndex()
    {
        return $this->render('index');
    }

    public function beforeAction($action)
    {

        $user = Yii::$app->user->identity;
        if ($user) {
            return true;
        } else {
            if ($action->actionMethod != "actionLogin") {
                $this->redirect([Url::to('login')]);
                return false;
            }
        }
        return parent::beforeAction($action);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('index');
        }
        else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
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

    public function actionPages(){

    }

    public function actionTimes(){

    }

}