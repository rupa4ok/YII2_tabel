<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 09.11.2018
 * Time: 21:12
 */

namespace frontend\controllers;

use frontend\models\Employee;
use yii\web\Controller;

class EmployeeController extends Controller
{
    
    public function actionIndex()
    {
        $emlpoyee1 = new Employee();
        $emlpoyee1->firstName = 'Alex';
        $emlpoyee1->secondName = 'Biba';
        $emlpoyee1->middleName = 'FDfdf';
        $emlpoyee1->salary = 1000;
    }
}