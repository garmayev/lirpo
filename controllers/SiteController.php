<?php
	namespace lirpo\controllers;
	use Yii;
	use lirpo\models\Notification;

	class SiteController extends \yii\web\Controller {

		public function behaviors()
		{
			return [];
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
	        ];
	    }

		public function actionIndex() {
	        if ( !Yii::$app->user->isGuest ) {
				$dataProvider = new \yii\data\ActiveDataProvider([
		            'query' => Notification::find(),
		        ]);
				return $this->render('index.php', ['notifications' => $dataProvider]);
	        } else if (Yii::$app->request->post()) {
		        $model = new \common\models\LoginForm();
		        if ($model->load(Yii::$app->request->post()) && $model->login()) {
					return $this->goBack();
		        } else {
		            $model->password = '';
		            return $this->render('login.php', [
		                'model' => $model,
		            ]);
		        }
	        } else {
	        	return $this->render('login.php', ['model' => new \common\models\LoginForm()]);
	        }
		}

		public function actionError() {
			return $this->render('error.php');
		}
	    public function actionLogout()
	    {
	        Yii::$app->user->logout();

	        return $this->goHome();
	    }
	}
?>