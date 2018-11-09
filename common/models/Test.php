<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 07.11.2018
 * Time: 22:21
 */

namespace frontend\models;

use yii\web\Controller;
use frontend\models\Test;

class Test {
    
    public static function getNewsList()
    {
        $sql = 'SELECT * FROM news';
        Yii::$app->db->createCommand($sql)->queryAll();
        
        return $this->render('index');
    }
}