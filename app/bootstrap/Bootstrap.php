<?php
namespace App\bootstrap;

//require_once "../../vendor/autoload.php";

//use Dotenv\Dotenv;
class Bootstrap
{
    public function __invoke(){
        echo "Hello";
    }
//    public static function initEnv(){
//        $dotenv = Dotenv\Dotenv::createImmutable("../../");
//        $dotenv->load();
//    }
 /*
  * Carregar Env
  * Carregar Banco caso não conecte no banco quebra a aplicação
  *
  */
}