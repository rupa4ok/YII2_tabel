<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 07.11.2018
 * Time: 21:16
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($max);
        return $this->render('index', [
            'list' => $list
        ]);
    }
    
    public function actionView($id)
    {
        echo $id;
        $item = Test::getItem($id);
        
        return $this->render('view', [
            'item' => $item,
        ]);
    }
    
    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
            ->setFrom('rupa4ok7@gmail.com')
            ->setTo('rupa4ok7@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Текст сообщения')
            ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
            ->send();
        var_dump($result);
        die;
    }
}