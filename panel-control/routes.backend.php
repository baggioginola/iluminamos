<?php
/**
 * Created by PhpStorm.
 * User: mario
 * Date: 31/ene/2017
 * Time: 20:29
 */

$app->group('/usuarios', function () use($app) {
    $app->post('/getAll', function() use($app){
        require_once __CONTROLLER__.'CUserController.class.inc.php';
        if(!$result = UserController::singleton()->getAll()){
            echo 'Fail';
        }
        echo $result;

    });

    $app->post('/add', function() use($app){
        require_once __CONTROLLER__ . 'CUserController.class.inc.php';
        if(!$result = UserController::singleton()->add()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getById', function() use($app){
        require_once __CONTROLLER__ . 'CUserController.class.inc.php';
        if(!$result = UserController::singleton()->getById()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/edit', function() use($app){
        require_once __CONTROLLER__ . 'CUserController.class.inc.php';
        if(!$result = UserController::singleton()->edit()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/delete', function() use($app){
        require_once __CONTROLLER__ . 'CUserController.class.inc.php';
        if(!$result = UserController::singleton()->delete()) {
            echo 'Fail';
        }
        echo $result;
    });
});



$app->group('/categorias', function () use($app) {
    $app->post('/getAll', function() use($app){
        require_once __CONTROLLER__.'CCategoriesController.class.inc.php';
        if(!$result = Categories::singleton()->getAll()){
            echo 'Fail';
        }
        echo $result;

    });

    $app->post('/add', function() use($app){
        require_once __CONTROLLER__ . 'CCategoriesController.class.inc.php';
        if(!$result = Categories::singleton()->add()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getById', function() use($app){
        require_once __CONTROLLER__ . 'CCategoriesController.class.inc.php';
        if(!$result = Categories::singleton()->getById()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/edit', function() use($app){
        require_once __CONTROLLER__ . 'CCategoriesController.class.inc.php';
        if(!$result = Categories::singleton()->edit()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/delete', function() use($app){
        require_once __CONTROLLER__ . 'CCategoriesController.class.inc.php';
        if(!$result = Categories::singleton()->delete()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getLastId', function() use($app){
        require_once __CONTROLLER__ . 'CCategoriesController.class.inc.php';
        if(!$result = Categories::singleton()->getLastId()) {
            echo 'Fail';
        }
        echo $result;
    });
});

$app->group('/marcas', function () use($app) {
    $app->post('/getAll', function() use($app){
        require_once __CONTROLLER__.'CBrandsController.class.inc.php';
        if(!$result = Brands::singleton()->getAll()){
            echo 'Fail';
        }
        echo $result;

    });

    $app->post('/add', function() use($app){
        require_once __CONTROLLER__ . 'CBrandsController.class.inc.php';
        if(!$result = Brands::singleton()->add()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getById', function() use($app){
        require_once __CONTROLLER__ . 'CBrandsController.class.inc.php';
        if(!$result = Brands::singleton()->getById()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/edit', function() use($app){
        require_once __CONTROLLER__ . 'CBrandsController.class.inc.php';
        if(!$result = Brands::singleton()->edit()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/delete', function() use($app){
        require_once __CONTROLLER__ . 'CBrandsController.class.inc.php';
        if(!$result = Brands::singleton()->delete()) {
            echo 'Fail';
        }
        echo $result;
    });
});

$app->group('/tipo_cambio', function () use($app) {
    $app->post('/getAll', function() use($app){
        require_once __CONTROLLER__.'CExchangeRateController.class.inc.php';
        if(!$result = ExchangeRate::singleton()->getAll()){
            echo 'Fail';
        }
        echo $result;

    });

    $app->post('/add', function() use($app){
        require_once __CONTROLLER__ . 'CExchangeRateController.class.inc.php';
        if(!$result = ExchangeRate::singleton()->add()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getById', function() use($app){
        require_once __CONTROLLER__ . 'CExchangeRateController.class.inc.php';
        if(!$result = ExchangeRate::singleton()->getById()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/edit', function() use($app){
        require_once __CONTROLLER__ . 'CExchangeRateController.class.inc.php';
        if(!$result = ExchangeRate::singleton()->edit()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/delete', function() use($app){
        require_once __CONTROLLER__ . 'CExchangeRateController.class.inc.php';
        if(!$result = ExchangeRate::singleton()->delete()) {
            echo 'Fail';
        }
        echo $result;
    });
});


$app->group('/proyectos', function () use($app) {
    $app->post('/getAll', function() use($app){
        require_once __CONTROLLER__.'CProjectsController.class.inc.php';
        if(!$result = Projects::singleton()->getAll()){
            echo 'Fail';
        }
        echo $result;

    });

    $app->post('/add', function() use($app){
        require_once __CONTROLLER__ . 'CProjectsController.class.inc.php';
        if(!$result = Projects::singleton()->add()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getById', function() use($app){
        require_once __CONTROLLER__ . 'CProjectsController.class.inc.php';
        if(!$result = Projects::singleton()->getById()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/edit', function() use($app){
        require_once __CONTROLLER__ . 'CProjectsController.class.inc.php';
        if(!$result = Projects::singleton()->edit()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/delete', function() use($app){
        require_once __CONTROLLER__ . 'CProjectsController.class.inc.php';
        if(!$result = Projects::singleton()->delete()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getLastId', function() use($app){
        require_once __CONTROLLER__ . 'CProjectsController.class.inc.php';
        if(!$result = Projects::singleton()->getLastId()) {
            echo 'Fail';
        }
        echo $result;
    });
});

$app->group('/productos', function () use($app) {
    $app->post('/getAll', function() use($app){
        require_once __CONTROLLER__.'CProductsController.class.inc.php';
        if(!$result = Products::singleton()->getAll()){
            echo 'Fail';
        }
        echo $result;

    });

    $app->post('/add', function() use($app){
        require_once __CONTROLLER__ . 'CProductsController.class.inc.php';
        if(!$result = Products::singleton()->add()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getById', function() use($app){
        require_once __CONTROLLER__ . 'CProductsController.class.inc.php';
        if(!$result = Products::singleton()->getById()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/edit', function() use($app){
        require_once __CONTROLLER__ . 'CProductsController.class.inc.php';
        if(!$result = Products::singleton()->edit()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/delete', function() use($app){
        require_once __CONTROLLER__ . 'CProductsController.class.inc.php';
        if(!$result = Products::singleton()->delete()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getLastId', function() use($app){
        require_once __CONTROLLER__ . 'CProductsController.class.inc.php';
        if(!$result = Products::singleton()->getLastId()) {
            echo 'Fail';
        }
        echo $result;
    });
});

$app->group('/imagenes', function () use($app) {

    $app->post('/add', function() use($app){
        require_once __CONTROLLER__ . 'CImagesController.class.inc.php';
        if(!$result = Images::singleton()->add()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/rename', function() use($app){
        require_once __CONTROLLER__ . 'CImagesController.class.inc.php';
        if(!$result = Images::singleton()->rename()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/edit', function() use($app){
        require_once __CONTROLLER__ . 'CImagesController.class.inc.php';
        if(!$result = Images::singleton()->edit()) {
            echo 'Fail';
        }
        echo $result;
    });
});

$app->group('/reportes', function () use($app) {

    $app->post('/getProductLikes', function() use($app){
        require_once __CONTROLLER__ . 'CReportsController.class.inc.php';
        if(!$result = Reports::singleton()->getProductsLikes()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getProductSales', function() use($app){
        require_once __CONTROLLER__ . 'CReportsController.class.inc.php';
        if(!$result = Reports::singleton()->getProductsSales()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getCustomers', function() use($app){
        require_once __CONTROLLER__ . 'CReportsController.class.inc.php';
        if(!$result = Reports::singleton()->getCustomers()) {
            echo 'Fail';
        }
        echo $result;
    });

    $app->post('/getCustomerById', function() use($app){
        require_once __CONTROLLER__ . 'CReportsController.class.inc.php';
        if(!$result = Reports::singleton()->getCustomerById()) {
            echo 'Fail';
        }
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

$app->group('/files', function () use($app){
    $app->post('/readXLS', function() use($app){
        require_once __CONTROLLER__. 'CXLSController.class.inc.php';
        $result = XLS::singleton()->read();
        echo $result;
    });
});