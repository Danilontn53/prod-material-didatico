<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap\Modal;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    </head>

    <body>

    <!-- Exemplo de menu 1 -->
    <?php //echo $this->render('menu_1') ?>
    <!-- Exemplo de menu 2 -->
    <?php echo $this->render('menu_2') ?>

    </body>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900">



    <div class="sticky-container">
        <ul class="sticky">
            <li>
                <a href="http://www.facebook.com">
                    <img width="32" height="32" title="" alt="" src="https://lh3.googleusercontent.com/_XRlzEGzi_QxjpSpGrtKmoH2XI1T10-b97JbDusT1S7pOHfKt7yA2ibULCe8j4cpMLdJ0USvC-S14-Lbes-6C0fqIeL5jtOlkv39xaiCv3AZe-x8ef8JdKXYVL_cKiM1yXvRS1nt6weGipJ48-TJhelvGN1TL2bKhBszVUHWtOUFiawLwuQP66QXmiamlpGEegOmDXSDf520BjLa6pXp1MRQCgS8sq2aFuXkEcrMoHp1iTlkQQC2xtLpgal6s5ZScNIz5Fyl9aYP_ehRwOWXQBxe23bo8DboJ6gT1H3xBkGhGOJrlixWOqjIsbILQ-AbIx7s423v274d0PUzC-yIQT2IbHEZB3jGSXvlI-5GmLitmg_h1IsI3qiYRUlbwlBw2TaiHHmh6i69p_Nk2jH7Ls80gtMu5k-R4AROhAxOHFBzRhIoam5MOrZePjjLwxDX6NL6mKt-sjkK01BPr3tBviUTVVV8RJImDF8UWptmg0rzsIPx0fRBkyR6qbV5WOT_d92RRgH4g7fOUA-QI_2rn3tB3M3J0SBasUsjNtb7_Bqc9Y0o7hiyijXLM6MnaY5TYMwdU0hxZvkAp1dDDJ7HHCtkPEQx4yk254RWb50cOoZWHYTaaiu2HpdUHB5Zczihbv-Ujdjs0B3FFRG7iCj6w6TPnJVGr0NqIAK9T_M4VGaXZzm9csfuk1IM2Q=s32-no" />
                    <p class="titulo">Facebook</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img width="32" height="32" title="" alt="" src="https://lh3.googleusercontent.com/3MJEAwcRPFkYMDkkPyTSifPdboyMYjvPIR9uGT9XodzrXr9ZOC-XdRuode_70V2h7VD3NjiIM6VZfdLPtlAQQ0ofkqhpFVbjzalS25_Mr-BA8RJKpZekS_wqWHmKPSd_2dGg-zQ-Z7PSJosy74jmNLM5P3csv3BlZ7QJJSxOES7bqt0EAjeUlI4q0HDPEemEM1DA1KZ5v3ZmBivtxkJVGo2nd8jPjH-kAq6VtPh8kq7031O49GWbaVyCMFMtBfuSc28cM_C7PZ8LCpzNwKQzzo3LVed8_90uCpG6mWBFrFcGFEhWdg-SoLBbU4WkvnD3sjbvZRWoAD_qWWwDYIy3cq14TJugURJQOtvhlV6nFnU--ouKLdDIFzhoandtc4nz0HaAiGX9TV8znhkpOp_7KpuarqW9FF1nQ0ZIyJyyDp8ISsqMrlaXjMxr5v1gDvrJ6YgjTbuvot1jznZis4n8m41ht2gzwSTRqMIVU7sn6AfqM_3QHRTzClHvVYRh-8V-V9azsSTwSZDiof4jjgeO4CVydWRIm93OQn_z2ZM6B1XW8VAqHMFZ1rWqCYVzh3hqQu8hGv2Jv5mKecYBIsLc0nuyH5B2FlTh6ee57qYbXDnB-c9dJH79nbdaqX6tmv_s=s32-no"/>
                    <p class="titulo">Twitter</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img width="32" height="32" title="" alt="" src="https://lh3.googleusercontent.com/NWZXpjoefspWHXi_xytfXNtDBCuTN66WGgqZUAvAbcU0DDGaTdDhCiXfq7ePWQ0C4WWTV18h5uz7eMiTB1D9ZmDMnrXsb3Bb3NDux46WxJz3_cSfxN2mGZF7z27r_zf7tmaByq9ztlIZXdbN6F1Hd_6UhtVCh4cvHR2ek33P-b5NFirvcbWh6HdKSxVgmgzG-8RJFby2NxqRGB1ztFuiRreEbXVOoqCeJMsO3epGPIFGrkJ8y33Ulil_Mcncpi35yoDlwqHRRPFXWvz9x9gfqXkrwdaJViFNqjNPi_rs-kgjUz7AyC08SlvqcQkGpfaTCBncTRmOi6Qw6gPM97nDcqMzujUQnWlCLvp-hlwN5782hccplbd80-EzKoQZWRnO-HnSXchnrgbTUyPr3Sg_PRBWS22eShuAXeQc50H6KQVwX4gZI2ywj2R8wM9fJ89HZgqhsK25bnSdbZTwCd0GyWTlFkt89LA8EurNPCQMnoHNaMgt9djtyk96E53OxlBmDDaRK0V6votk0nY4YGvLUIX8EvtQy-R2MQ1z3hkSIg9X5u04Z7U9pRd3g-KH_yjXBLvqjR8H3iQ50dSnu7N3YSflwXiyt8yl7CbRN1yivQUda-NY9uxQ0P4HXpWhpQdS=s32-no"/>
                    <p class="titulo">Pinterest</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img width="32" height="32" title="" alt="" src="https://lh3.googleusercontent.com/QWSeIeSadCijf3CXm84jGRDtCe9hSavJsyRThvSqqsuBg7JcC3A0xTyZatuqaO2RLL6RX41-1M1fKOgvrxD0w3t9K5IvEcvEdXNODfBesunSsW0y_kph3yl1xqzNuDNVQdvbKi8h2iRPp3N_-r1aSGJtHoVx9Jt7FrhpgIntq3PYX-fpE_kfa_je-Vso7crRexQQgNIlTIY6LHrk7IKdsLnc90uPQR9SapDaeIilv2oEr3oUh2E9psPhwGgUHnTIgLJ25zVmBkEGe3wjelc4v27LC7dfPlntiWckjCRpg3fQqsR2aCBsdyGzRVcN7cjRPbQ93I2eDSjlJMMKzcr5Orc4mJfbBHI_XssRfcCJ0btOqOGNgZbs9d1akrCbCPuxLL9hIk3rQ2OGnwLL6-5K0hlDZQJR4ENojiT1RVG6RYmzehNplPo7CgxBNmSA3kc8fAdjwt__msJ6guESsnQ5xsmKiFmnG5UO-C3asTLeC7m6Ws5PG1Fofiq93BAHkvpMJSWAe3jrzHv0Joyx4w5ZVuyp9FgS282Cg4IL1jHkYhCGBW8RzPTMyyq-v1-c8jTA42HFP2x2N1K-vxS58SUu8AnVdSLuY46_KgahFpGzX6w7y25YbvFk-sJMtBn2nSpZ=s32-no"/>
                    <p class="titulo">Linkedin</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img width="32" height="32" title="" alt="" src="https://lh3.googleusercontent.com/GmgWb2bABdL6ZZhfcPTzNaSW2Pwj4qK_huq4ar2D9NY-bNIGZQWue3dyvoDuk_PhJTUDdDX86zs41gvuF5-y8npV5xpAcOE5M6sGACvfBBWHYcLXs-9WrWK6b6OZCnGl8jT_H7xxjqmNaZN42gKGuAhdcOHf2ZpSQO3MPb0xADKI65UIDduSRKuTJghzSzgoovW5xOrFEhtS6vkU8n0FKOnVP612TZ2x6gdk6-zT1D14QUUXkegnH5GcrMPxG4P4bMH6OBPEBUhwsPC-n91vpVQ8lCUlqDRSVQanxwVnKNYj_x89g4Dv9r81jwu-I8HecG--kGGPahaWevezi6vLHbbG9KTR4XYI8n47D6I_VzFTS6anzMcGfJK8A2CuzeMYfneMCYgQIgvO-FFQegI9AsUY-FhhmC728uZ4Mk0JZd3IS5dSebynCs7XoYb9UWLDg_Qs1Rp-2rj4ZibqAsYbJbzdjsnatXS0ojr7qf3l0Bstghn1ASObXXxbLPPo5abw9RV12X-hcIHlD6S5yD6Fh_bG4hrtZQwK6ObySZNTgwKeuVNWCbDit4VXVOcxCXBx5HSVS0uXFi2q-evu43d4QO6uogGMlaypYqToUOzxMaJnwZ4--NHn7TImg-USFdm_=s32-no"/>
                    <p class="titulo">RSS</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img width="32" height="32" title="" alt="" src="https://lh3.googleusercontent.com/G4pYB6EhdemEdFIoWwC8kaarXje_md6ajCV5ICOLEOCS9zDpA29yphp3E4S6dV-vcEkthSq_yLLmbrs30y-rucFTAuO-eCwG75woXg5PFFrGuw26CtfTkR8uDoH6bio-C72oODORdw3huVrzAl2-t4XfyjqS3pNjKK_AhhvirTbmd_zz46knGlNp3-2IfDqfD5yv2J9NqgBYfObEOGrWgmnpSgQvte6S4eJcAIxeR1LWQEuqqX2Nh18-xsxOMkFbUeGy7UoJJPZPGCpoQh9LrTRt5QwAxSKiz1XWaf-nL6nHJO4gouV6PUv8dtvMvDCNXKNl3sI34NsFUi3WGpuYbcOtT8jM7Kmlc9Zy6diN2a7f3zIY10kdbkcQXnRiqWRNO55Z2C6RrAlMNfNQw4OvQOYBMyRqTnVFwDoLdoB3W4P2JgD9vQA2d0ToQtaYS9xb7FCZCcfn3xne4oXeSKM_B8aQjLMujD57ORDjHMtCCuGuYDN1-eV_5eVeybRaRM8Z7z_ss-7xnci1-St71M27omussnxlUCwS6DI66MLLEfCdTByhNWFw2bD4Hp7UZJltY3Wonj_XBMvA_gvnEWp06BnRIJ1AVGlgnq8NXNUf6ESZZFFzjdJv9F6FgI2q6k2g=s32-no"/>
                    <p class="titulo">Tumblr</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img width="32" height="32" title="" alt="" src="https://lh3.googleusercontent.com/WWJOIhy8ii5F0hPZAGXqo4z-iv1fwVJIlOv6Qzj4HF2BWJLYUCkpiptRlE-pdbImUBt-F2zdf7M71AZ_52CXep1-E75W-DJyRYQd55Oxft3n6rCRZx7Dlw5SyTZDFAmO3Ivlj1jztmCYudgNv7ghle6IP5qN4q48SUip5Rlb7BE_dCaUm-8xr59Bq24FAtXhlxZbaiuQFZrkiDi51_clESfsb4jLwOqE60Xwezk2_5wpAA0LvtTr5iu4aC_HOfv9TDQH4rkA14mkirXEI_lL845KQR6dzQj6a1SrnD56-zvK86omnNFrHIWbtx8nK03U_I997IEisbnuFbUznHxkvwg6AxOchw_G7Sxz-YYMp7hfE_DuT27aHLApyqEirrdGlK6GIcW3z5vCZTQvEunWTjcqJA-jYst52gKXpekVsFPRkwefNm9Jy6H3fIzmmbA4b-XYyA6KCCEl2zMgpMlMwctz4kyN0i3uqhqlodCFq6zFtjcwEqsSLdiMPqdxA3Y2AlU9M-Rgn6UGpkOb758HUiWKt3DOx2-vr9tr6CFvMTc-BpRCcYT_z2gKb0SkSU8EyYusgBnrIQZE26lWXAtO2BFysp-wQelNTNQXZA9Kl1XgG7lo5of5FM9R8OyqcIP4=s32-no"/>
                    <p class="titulo">WordPress</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img width="30" height="32" title="" alt="" src="https://lh3.googleusercontent.com/XT8QfoIUku7zUiboQYPOsMlbESbwmBEjz8s6l0LAXUHv2leigt4RIWj9e4QTvSQ7Be56dSn95KAgDT71TvGGyJN1Txu62bSVd4RYGCP0-AbOScuQ8sGqUcgd_wX5MzvfaEtBmRKIMUzcLBOKnuXIqif_HwoB7ooqVX1qlfdkEyStMUsLuj0hM144ICoVmYSdqDduzFUBBAHYnBuJljMTeG7B5kAyrCcbPqJoMRMqjOPvh8Dj7ea_xT0uTjpDT96tK6h96Mpg--J7kfoexolkfFqTv1INmp1Cra6LqhWPR6SwVGi55zYfvIoClZfR3TOV-AEktNBCTSHgZuh2TGFpHu-x7er641RtVaLZTC3qn8CqN1HNqIwtzwRMa0vvqfw5sCs-shGNTJbUYib3wMqFw5aTsvvhUseV4XdGzt3PaJucjVDw8F5Y6XwYQGbYSd2WlTImzZRCMJfMmpHLCfw8SaCU6oTpDcThJhOQ-QRrz61S_F8xWHUar8GZaqVoIs_8T4I0-rIruLxhmTCjR9AO_wyiMuRTJAV1iroyPzeEqFAjX0hmdEbhJSLB8o7NcwIHIjXDM14dCBccCC6UloL_6VQ8Iv_1iBPnssluSfWjDAU49HtCIvjSw-stKlN1MhaV=s32-no"/>
                    <p class="titulo">Vimeo</p>
                </a>
            </li>
        </ul>
    </div>

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

<?php $this->registerJs($this->render('@frontend/web/js/tela-login/tela-login.js')); ?>

