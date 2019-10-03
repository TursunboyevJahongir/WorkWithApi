<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 23.09.2019
 * Time: 18:54
 */

namespace app\controllers;


use app\models\User;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}