<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
//use app\models\Posts;
use yii\data\Pagination; 
use app\models\Sef;
use app\models\User;
use app\models\Patient;
use app\models\Doctor;
use app\models\EntryForm;
use app\models\Hospital;
use app\models\OrderForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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
         $session = Yii::$app->session;

          
            $session->set('pw', '1111');

        // $query = Posts::find()->where(['hide'=>0]);
        // $query = Posts::find();

        $pagination = new Pagination([
            'defaultPageSize' => 1,
            'totalCount' => 1,
        ]);
        
        // $posts = $query->orderBy('id')
        //     ->offset($pagination->offset)
        //     ->limit($pagination->limit)->all();
        


        //     Posts::setNumber($posts);
        // return $this->render('index',[
        //     'posts' => $posts,
          
           
            // 'active_page' => Yii::$app->request->get("page", 1),
            // 'count_pages'=> $pagination->getPageCount(),
            // 'pagination'=>$pagination,
            // 'pw'=>$session->get('pw'),
            // ]);
        return $this->render('index',[
                'pagination'=>$pagination,
            ]);

    }

    public function actionEntry()
        {
            $model = new EntryForm();
           

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                // данные в $model удачно проверены

                // делаем что-то полезное с $model ...
     
                return $this->render('entry-confirm', ['model' => $model]);
            } else {
                // либо страница отображается первый раз, либо есть ошибка в данных
                return $this->render('entry', ['model' => $model]);
            }
            // return $this->render('entry', ['model' => $model]);
        }

    public function actionReestr()
        {
                     
                $request = Yii::$app->request;
                $med_id = $request->get('med_id');
        
                return $this->render('reestr', ['med_id' => $med_id]);
          
        }

    public function actionDoctor()
        {     

            $request = Yii::$app->request;
                $doc = $request->get('doc');
                 $med_id = $request->get('med_id');
                // if($doc == "терапевт"){
                //     $doctors_q = Doctor::find()->where(['prof'=>'терапевт']);
                // }else if($doc == "семейный"){
                //     $doctors_q = Doctor::find()->where(['prof'=>'семейный']);
                // }else if($doc == "гастроэнтеролог"){
                //     $doctors_q = Doctor::find()->where(['prof'=>'гастроэнтеролог']);
                // }
                    if($med_id!="-1"){
                        $doctors = Doctor::find()->where(['med_id'=>$med_id,'prof'=>$doc])->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)->all();
                    }else{
                  $doctors = Doctor::find()->where(['prof'=>$doc])->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)->all();

            }
            // $doctors = $doctors_q->orderBy('id')
            // ->offset($pagination->offset)
            // ->limit($pagination->limit)->all();
                return $this->render('doctor', ['doc' => $doc,
                    'doctors'=>$doctors,]);
        }

        public function actionBooking()
        {
                     $request = Yii::$app->request;
                $doc_id = $request->get('doc_id');
        $doctors_q = Doctor::find()->where(['id'=>$doc_id])->one();
        $hospital = Hospital::find()->where(['id'=>$doctors_q->med_id])->one();               
       

                return $this->render('booking', [
                    'doc' => $doctors_q,
                    'hospital' => $hospital,
                    ]);
          
        }

        public function actionOrder()
        {
            $order = new OrderForm();
           $request = Yii::$app->request;
                $doc_id = $request->get('doc_id');
                $time = $request->get('time');               

        $doctors_q = Doctor::find()->where(['id'=>$doc_id])->one();
        $hospital = Hospital::find()->where(['id'=>$doctors_q->med_id])->one();

       // print_r( $doctors_q );
        print_r( $order->name );

            if ($order->load($request->post())) {
                // данные в $model удачно проверены

        $doctors_q->$time = '1';
        $doctors_q->save();

                    if($time=='t9'){
                         $time = '9:00';   
                    }else if($time=='t10'){
                        $time = '10:00';
                    }else if($time=='t11'){
                        $time = '11:00';
                    }else if($time=='t12'){
                        $time = '12:00';
                    }

        $patient = new Patient();
        $patient->name = $order->name;
        $patient->time = $time;
        $patient->doc_id = $doc_id;
        $patient->save();

                return $this->render('order-confirm', ['order' => $order,
                    'doc'=> $doctors_q,
                    'time'=>$time,
                    'hospital'=>$hospital,]);
            } else {
                // либо страница отображается первый раз, либо есть ошибка в данных
                // return $this->render('entry', ['model' => $model]);
                return $this->render('order', [
                'order' => $order,
                'doc'=> $doctors_q,
                'hospital'=>$hospital,
                ]);
            }
             
        }

         public function actionHospital()
        {
                return $this->render('hospital', []); 
        }

        public function actionPol()
        {
              $request = Yii::$app->request;
                $hosp = $request->get('hosp');                
                    $hospital = Hospital::find()->where(['hosp'=>$hosp])->all();
                        
                return $this->render('pol', ['hospitals' => $hospital]); 
        }

}
