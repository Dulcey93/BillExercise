<?php
    //El trait getInstance se encarga de crear una instancia de la clase que lo implementa concretamente el trait significa que se puede implementar en cualquier clase y esta tendra una instancia de si misma en la variable $instance y se puede acceder a ella con el metodo getInstance que es estatico y no necesita instanciar la clase para acceder a el y se puede pasar un argumento que sera el constructor de la clase que lo implementa.
    trait getInstance{
        public static $instance;
        public static function getInstance() {
            //func_get_args() obtiene los argumentos que se le pasan a la funcion como un array y array_pop() retorna el ultimo elemento del array y lo elimina del array y se lo asigna a la variable $arg y si no se le pasa ningun argumento a la funcion se le pasa un array vacio para que no de error.
            $arg = func_get_args();
            $arg = array_pop($arg);
            //Si la variable $instance no tiene una instancia de la clase que lo implementa o se le pasa un argumento se crea una instancia de la clase que lo implementa y se le pasa el argumento al constructor de la clase que lo implementa y se le asigna a la variable $instance y si ya tiene una instancia de la clase que lo implementa o no se le pasa un argumento solo retorna la instancia de la clase que lo implementa.
            return (!(self::$instance instanceof self) || !empty($arg)) ? self::$instance = new static(...(array) $arg) : self::$instance;
        }
    }
    function autoload($class) {
        // Directorios donde buscar archivos de clases
        $directories = [
            dirname(__DIR__).'/scripts/db/',
            dirname(__DIR__).'/scripts/user/',
            dirname(__DIR__).'/scripts/info/',
        ];
        // Convertir el nombre de la clase en un nombre de archivo relativo
        $classFile = str_replace('\\', '/', $class) . '.php';
        // Recorrer los directorios y buscar el archivo de la clase
        foreach ($directories as $directory) {
            $file = $directory . $classFile;
            // Verificar si el archivo existe y cargarlo
            if (file_exists($file)) {
                require $file;
                break;
            }
        }
    }
    
    spl_autoload_register('autoload');

    // print_r(tb_user::getInstance()->getUserId(["n_bill" => 1]));
    // print_r(tb_user::getInstance()->getAllUser());
    // print_r(tb_user::getInstance()->deleteUser(["n_bill" => 1]));






    // $data ='{
    //     "n_bill": 1,
    //     "bill_date": "1998-01-01",
    //     "seller": "a",
    //     "identification": 1,
    //     "full_name": "a",
    //     "email": "a@gmail.com",
    //     "address": "a",
    //     "pone": 1
    // }';
    // print_r(tb_user::getInstance()->putUser(json_decode($data,true)));


    



    // $data ='{
    //     "n_bill": 1,
    //     "bill_date": "2023-03-09",
    //     "seller": "Campus",
    //     "identification": 106465,
    //     "full_name": "Miguel Angel Catsro Escamilla",
    //     "email": "ma@gmail.com",
    //     "address": "Calle 11",
    //     "pone": "30455154845"
    // }';
    // print_r(tb_user::getInstance()->postUser(json_decode($data, true)));
    
?>