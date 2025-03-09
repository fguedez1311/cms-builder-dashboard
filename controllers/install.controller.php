<?php

    class  InstallController{
        /*===============================================================
        Información de la Base de datos
        =================================================================*/
        static public function infoDatabase(){
            $infoDB=array(
                "database"=>"cms-builder",
                "user" => "root",
                "pass" => "admin"
            );

            return $infoDB;
        }

        /*===============================================================
        Conexión a la Base de Datos
        =================================================================*/

        static public function connect(){
            try {
                $link=new PDO("mysql: host=localhost;dbname=".InstallController::infoDatabase()["database"],
                InstallController::infoDatabase()["user"],
                InstallController::infoDatabase()["pass"]       
                );
                $link->exec("set names utf8");
        
            } catch(PDOException $e) {
                die("Error: ". $e->getMessage());
            }
            return $link;
        }

        /*===============================================================
        Intalación del Sistema
        =================================================================*/

        public function install(){
            if (isset($_POST["email_admin"])){
                echo '<pre> $_POST';print_r($_POST);echo '</pre>';
                print("\n");
                echo '<pre> Conexión a la BD';print_r(InstallController::connect());echo '</pre>';
                print("\n");
            }
        }

    }

?>