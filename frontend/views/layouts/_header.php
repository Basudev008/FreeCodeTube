<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow',
    ],
]);

if (Yii::$app->user->isGuest) {
    $menuItems[] = [
        'label' => 'Signup',
        'url' => ['/site/signup'],
    ];
    $menuItems[] = [
        'label' => 'Login',
        'url' => ['/site/login'],
    ];
} else {
    $menuItems[] = [
        'label' => 'Logout ('.Yii::$app->user->identity->username.')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']
    ];
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => $menuItems,
]);
NavBar::end();
?>