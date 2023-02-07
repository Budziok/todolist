<?php

declare(strict_types=1);

namespace App;

use App\Request;
use App\Exception\AppException;
use App\Exception\ConfigurationException;
use Throwable;

require_once("src/Utils/debug.php");
require_once("src/Controller.php");
require_once("src/Request.php");
require_once("src/Exception/AppException.php");
require_once("src/Exception/NotFoundException.php");

$configuration = require_once("config/config.php");

$request = new Request($_GET, $_POST);

try{
//$controller = new Controller($request);
//$controller->run();

AbstractController::initConfiguration($configuration);

(new Controller($request)) -> run();
} catch (ConfigurationException $e) {
    echo "<h1>Wystąpił błąd w aplikacji</h1>";
    echo 'Problem z konfiguracją <br/> Proszę skontaktowac się z adminem';
} catch (AppException $e) {
    echo "<h1>Wystąpił błąd w aplikacji</h1>";
    echo $e->getMessage();
} catch (Throwable $e) {
    echo "<h1>Wystąpił błąd w aplikacji</h1>";
}



