<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;
use app\models\posts;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
		$posts = posts::find()->all();
        return $this->render('home',['posts' => $posts]);
    }

 
	/** Create Post Action   **/
	 public function actionCreate(){
			$post = new posts();
			$formData = yii::$app->request->post();
			if($post->load($formData)){
				if($post->save()){
					yii::$app->getSession()->setFlash('message','Post Published Successfully');
					return $this->redirect(['index']);
				}else{
					yii::$app->getSession()->setFlash('message','Failed To Post');

					
				}
				
			}
			return $this->render('create',['post' => $post]);
			
	}
	
	/*** view template action *///
	
	  public function actionView($id){
		  
			$post = posts::findOne($id);
       		return $this->render('view',['post' => $post]);

    }
	/*** update data action  ****/
	 public function actionUpdate($id){
		 	$post = posts::findOne($id);
			if($post->load(yii::$app->request->post()) && $post->save()){
					yii::$app->getSession()->setFlash('message','Post Updated Successfully');
				return $this->redirect(['index','id'=>$post->ID]);
				
				
			}else{
			    return $this->render('update',['post' => $post]);


				
			}


    }
	/*** Delete Data action ***/
	public function actionDelete($id){
		$post = posts::findOne($id)->delete();
		if($post){
			yii::$app->getSession()->setFlash('message','Post Deleted Successfully');
				return $this->redirect(['index']);
			
		}

    }

   

   

 
	
	
}
