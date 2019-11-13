<?php

namespace app\controllers;

use yii\rest\ActiveController;
use sizeg\jwt\Jwt;
use sizeg\jwt\JwtHttpBearerAuth;
use Yii;

class WordController extends ActiveController
{
    public $modelClass = 'app\models\Words';

    public function behaviors()
    {
      $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => JwtHttpBearerAuth::class,
            'optional' => [
                'login',
            ],
        ];

      return $behaviors;

      /*  return [
                [
                'class' => \yii\filters\ContentNegotiator::className(),
                'formats' => [
                    'application/json' => \yii\web\Response::FORMAT_JSON,
                ],
            ],
        ];*/
    }    
}