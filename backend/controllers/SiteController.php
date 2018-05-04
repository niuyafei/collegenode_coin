<?php
namespace backend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\data\Pagination;
use common\models\Coins;
/**
 * Site controller
 */
class SiteController extends Controller
{
    public $enableCsrfValidation = false;
    public $email = 'jinzhenghao@collegenode.com';
    public $password = '123456';
    /**
     * @inheritdoc
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    /**
     * @inheritdoc
     */
//    public function actions()
//    {
//        return [
//            'error' => [
//                'class' => 'yii\web\ErrorAction',
//            ],
//        ];
//    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if(Yii::$app->session->get('email') != $this->email){
            $this->redirect(['site/login']);
        }
        $query = Coins::find()->where(["status" => 1])->orderBy("create_time DESC");
        $count = $query->count();

        $pages = new Pagination(['totalCount' => $count, 'pageSize' => 20]);
        $data = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->renderPartial('index', [
            'data' => $data,
            'pages' => $pages
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if(Yii::$app->session->get('email') == $this->email){
            $this->redirect(['site/index']);
        }
        if($post = Yii::$app->request->post()){
            $email = isset($post['email']) ? $post['email'] : '';
            $password = isset($post['password']) ? $post['password'] : '';
            if(!$email || !$password){
                return $this->asJson([
                    'code' => 20,
                    'message' => '参数错误'
                    ]);
            }
            if($email == $this->email && $password == $this->password){
                Yii::$app->session->set('email', $this->email);
                $this->redirect(['site/index']);
            }

        }
        return $this->renderPartial('login');
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->session->remove('email');
        $this->redirect(["site/login"]);
    }
}
