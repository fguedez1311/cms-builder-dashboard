<?php
    /*===============================================================
    Depurar Errores
    =================================================================*/
    define("DIR",__DIR__);
    ini_set('display_errors',1);
    ini_set('log_errors',1);
    ini_set("error_log",DIR."/php-error.log");

    /*===============================================================
    Requerimientos
    =================================================================*/

    require_once "controllers/template.controller.php";
    require_once "controllers/curl.controller.php";

    /*===============================================================
    Plantilla
    =================================================================*/
    $index=new TemplateController();
    $index->index();
?>