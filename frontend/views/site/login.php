<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">

    <div class="text-center">

        <h1><?= Html::encode($this->title) ?></h1>

        <p class="text-center">
            Por favor, preencha os seguintes campos para realizar o seu login:</p>

    </div>
    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div style="color:#999;margin:1em 0">
            <?= Html::a('Esqueceu sua senha?', ['site/request-password-reset']) ?>
        </div>

        <div class="form-group text-right">
            <?= Html::submitButton('Login <span class="glyphicon glyphicon-log-in"></span>',
                [
                    'class' => 'btn btn-primary',
                    'name' => 'login-button',
                    'id' => 'load',
                    'data-loading-text' => "<i class='fa fa-spinner fa-spin '></i> Processando"

                ]) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<?php $this->registerJs($this->render('@frontend/web/js/tela-login/buttons.js')); ?>

