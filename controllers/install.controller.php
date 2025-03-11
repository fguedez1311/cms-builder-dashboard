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
                /*===============================================================
                Creamos la Tabla admins
                =================================================================*/
                $sqlAdmins="CREATE TABLE admins (
                    id_admin INT NOT NULL AUTO_INCREMENT,
                    rol_admin TEXT NULL DEFAULT NULL,
                    permissions_admin TEXT NULL DEFAULT NULL,
                    email_admin TEXT NULL DEFAULT NULL,
                    password_admin TEXT NULL DEFAULT NULL,
                    token_admin TEXT NULL DEFAULT NULL,
                    token_exp_admin TEXT NULL DEFAULT NULL,
                    status_admin INT NULL DEFAULT '1',
                    title_admin TEXT NULL DEFAULT NULL,
                    symbol_admin TEXT NULL DEFAULT NULL,
                    font_admin TEXT NULL DEFAULT NULL,
                    color_admin TEXT NULL DEFAULT NULL,
                    back_admin TEXT NULL DEFAULT NULL,
                    date_created_admin DATE NULL DEFAULT NULL,
                    date_updated_admin TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                    PRIMARY KEY (id_admin))";
                    
                 $stmtAdmins=InstallController::connect()->prepare($sqlAdmins);

                /*===============================================================
                Creamos la Tabla pages
                =================================================================*/
                $sqlPages="CREATE TABLE pages (
                    id_page INT NOT NULL AUTO_INCREMENT,
                    title_page TEXT NULL DEFAULT NULL,
                    url_page TEXT NULL DEFAULT NULL,
                    icon_page TEXT NULL DEFAULT NULL,
                    type_page TEXT NULL DEFAULT NULL,
                    order_page INT NULL DEFAULT '1',
                    date_created_page DATE NULL DEFAULT NULL,
                    date_updated_page TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                    PRIMARY KEY (id_page))";
                 $stmtPages=InstallController::connect()->prepare($sqlPages);

                /*===============================================================
                Creamos la Tabla para los módulos
                =================================================================*/
                $sqlModules="CREATE TABLE modules (
                    id_module INT NOT NULL AUTO_INCREMENT,
                    id_page_module INT NULL DEFAULT '0',
                    type_module TEXT NULL DEFAULT NULL,
                    title_module TEXT NULL DEFAULT NULL,
                    suffix_module TEXT NULL DEFAULT NULL,
                    content_module TEXT NULL DEFAULT NULL,
                    width_module INT NULL DEFAULT '100',
                    editable_module INT NULL DEFAULT '1',
                   
                    date_created_module DATE NULL DEFAULT NULL,
                    date_updated_module TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                    PRIMARY KEY (id_module))";
                 $stmtModules=InstallController::connect()->prepare($sqlModules);
                
                 /*===============================================================
                Creamos la Tabla  colums
                =================================================================*/
                $sqlColumns="CREATE TABLE columns (
                    id_column INT NOT NULL AUTO_INCREMENT,
                    id_module_column INT NULL DEFAULT '0',
                    title_column TEXT NULL DEFAULT NULL,
                    alias_column TEXT NULL DEFAULT NULL,
                    type_column TEXT NULL DEFAULT NULL,
                    matrix_column TEXT NULL DEFAULT NULL,
                    visible_column INT NULL DEFAULT '1',
                    date_created_column DATE NULL DEFAULT NULL,
                    date_updated_column TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                    PRIMARY KEY (id_column))";
                 $stmtColumns=InstallController::connect()->prepare($sqlColumns);


                 if($stmtAdmins->execute() && 
                 $stmtPages->execute() &&
                 $stmtModules->execute() &&
                 $stmtColumns->execute()
                 ){
                    echo '<script>
                         fncMatPreloader("on")
                        fncSweetAlert("success","Tablas creadas exitosamente","")
                    </script>';
                 }
            }
           
        }

    }

?>