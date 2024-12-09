<?php 
    class Database
    {
        public static function conexionBD()
        {
            try {
                    $hostName = "localhost";
                    $port = "3306";
                    $database = "en_bajada_bike";
                    $userName = "root";
                    $pwd = "";
                    $pdo = new PDO("mysql:host=$hostName;
                                    port=$port;
                                    dbname=$database;
                                    charset=utf8",
                                    $userName,$pwd);
                    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    #echo "conexion exitosa";
                    return $pdo;
            } catch (Exception $e) {
                #solo muestra el error pero no el detalle
                #echo " <br><br> error de conexion <br><br> ";
                # muestra error de conexion mas el detalle del error
                echo " <br><br> error de conexion <br><br> " . $e;
            }
        }
    }
    #$test = new Database;
    #$test -> conexionBD();
 ?>