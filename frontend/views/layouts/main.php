<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$root = "http://localhost:8080";

error_log(print_r(Yii::$app->user->identity, true));
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>

    <body>

    <nav class="menu-navigation-icons">
        <a href="<?=$root.Yii::$app->urlManager->createUrl(['site/index'])?>" class="menu-magenta"><i class="fa fa-home"></i><span>Início</span></a>
        <a href="<?=$root.Yii::$app->urlManager->createUrl(['site/index'])?>" class="menu-blue"><i class="fa fa-code"></i><span>Code</span></a>
        <a href="<?=$root.Yii::$app->urlManager->createUrl(['site/about'])?>" class="menu-yellow"><i class="fa fa-plane"></i><span>Travel</span></a>
        <a href="<?=$root.Yii::$app->urlManager->createUrl(['site/contact'])?>" class="menu-green"><i class="fa fa-comment-o"></i><span>Fale Conosco</span></a>
        <!-- sem usuário logado no sistema -->
        <?php if (Yii::$app->user->isGuest){ ?>
            <a href="<?=$root.Yii::$app->urlManager->createUrl(['site/login'])?>" class="menu-red"><i class="fa fa-user"></i><span>Login</span></a>
            <a href="<?=$root.Yii::$app->urlManager->createUrl(['site/signup'])?>" class="menu-contact"><i class="glyphicon glyphicon-open"></i><span>Cadastrar-se</span></a>
        <?php } else { ?>
        <a class="menu-logout">
            <i class="glyphicon glyphicon-log-out"></i>
            <span> <?=
                Html::beginForm(['/site/logout'] , 'post')
                . Html::submitButton(
                    'Sair' ,
                    ['class' => 'btn-logout']
                )
                . Html::endForm()
                ?>
            </span>
        </a>
        <?php }?>
    </nav>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        $(function(){
            $('.menu-navigation-icons').slicknav({
                label: '',
                duration: 1000,
                easingOpen: "easeOutBounce", //available with jQuery UI
                prependTo:'#demo2'
            });
        });
    </script>

    </body>

    <?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
    ?>

    <nav class="left">

    </nav>

    <nav class="container bloco_breadcrumb">
        <?php if (isset($this->params['breadcrumbs'])){ ?>
            <label>você está aqui:</label>
        <?php }?>

        <?=\yii\widgets\Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?php if (!Yii::$app->user->isGuest)   echo "<span class='nome_usuario_header'>Usuário(a): " . Yii::$app->user->identity->nome . "</span>"; ?>
    </nav>

    <div class="container">
        <?= $content ?>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
