<?php
/**
 * Created by PhpStorm.
 * User: 06012220162
 * Date: 21/09/2018
 * Time: 17:01
 */

use frontend\assets\AppAssetMenu2;

error_log(print_r(Yii::$app->user->identity, true));
AppAssetMenu2::register($this);
?>

    <div class="parent2">
        <div  class="test1"><i class="fa fa-user fa-2x"></i></div>
        <div class="test2"><i class="fa fa-graduation-cap fa-2x"></i></div>
        <div class="test3"><i class="fa fa-code fa-2x"></i></div>
        <div class="test4"><i class="fa fa-envelope-o fa-2x"></i></div>
        <div class="mask2"><i class="fa fa-home fa-3x"></i></div>
    </div>