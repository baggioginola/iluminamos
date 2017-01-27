<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 15/ene/2017
 * Time: 18:47
 */
$app->group('/search', function () use($app) {
    $app->post('/products', function() use($app){
        require_once __CONTROLLER__.'CSearchController.class.inc.php';
        $result = Search::singleton()->getProducts();
        echo $result;
    });
});

$app->group('/cart', function () use($app) {
    $app->post('/add', function() use($app){
        require_once __CONTROLLER__.'CCartController.class.inc.php';
        $result = Cart::singleton()->add();
        echo $result;
    });
    $app->post('/delete', function() use($app){
        require_once __CONTROLLER__.'CCartController.class.inc.php';
        $result = Cart::singleton()->delete();
        echo $result;
    });
});

$app->group('/register', function () use($app) {
    $app->post('/add', function() use($app){
        require_once __CONTROLLER__.'CRegisterController.class.inc.php';
        $result = Register::singleton()->add();
        echo $result;
    });
});

$app->group('/contact', function () use($app) {
    $app->post('/sendMessage', function() use($app){
        require_once __CONTROLLER__. 'CContactController.class.inc.php';
        $result = Contact::singleton()->sendMessage();
        echo $result;
    });
});


$app->group('/login', function () use($app) {
    $app->post('/authenticate', function() use($app){
        require_once __CONTROLLER__. 'CLoginController.class.inc.php';
        $result = Login::singleton()->authenticate();
        echo $result;
    });
});