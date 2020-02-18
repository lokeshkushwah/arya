<?php

namespace app\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\LoginForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use app\models\SignupForm;
use app\models\ContactForm;
use yii\data\Pagination;

//use yii\data\Pagination;

/**
 * Site controller
 */
class AdminDashboardController extends Controller {

    public function actionIndex() {
      //  $this->layout = 'basic';
        return $this->render('index');
    }

  


}
